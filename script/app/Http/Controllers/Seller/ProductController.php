<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Term;
use App\Stock;
use App\Attribute;
use App\Attributeprice;
use App\Meta;
use App\Postcategory;
use Auth;
use Str;
use Session;
use App\Imports\ProductImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Price;
use App\Models\Termoption;
use App\Models\Termoptionvalue;
class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$type=1)
    {
        $auth_id=Auth::id();
        if ($request->src) {
            $posts=Term::where('type','product')
                ->with('preview')->where('status',$type)
                ->where('user_id',$auth_id)
                ->where($request->type,'LIKE','%'.$request->src.'%')->latest()->paginate(30);
        }
        else{
            $posts=Term::where('type','product')->with('preview')->withCount('order')->where('status',$type)->where('user_id',$auth_id)->latest()->paginate(30);
        }

        $src=$request->src ?? '';


        $actives=Term::where('type','product')->where('status',1)->where('user_id',$auth_id)->count();
        $drafts=Term::where('type','product')->where('status',2)->where('user_id',$auth_id)->count();
        $incomplete=Term::where('type','product')->where('status',3)->where('user_id',$auth_id)->count();
        $trash=Term::where('type','product')->where('status',0)->where('user_id',$auth_id)->count();
        return view('seller.products.index',compact('posts','src','type','actives','drafts','incomplete','trash','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $limit=user_limit();
        $posts_count=Term::where('user_id',Auth::id())->count();
        if ($limit['product_limit'] <= $posts_count) {
            Session::flash('error', 'Maximum posts limit exceeded');
            return back();
        }


        return view('seller.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title_en' => 'required|max:100',
            'title_ar' => 'required|max:100',
            'price' => 'required|max:50',
        ]);

        $slug=Str::slug($request->title_en);
        $title = json_encode([
            'ar' => $request->title_ar,
            'en' => $request->title_en,
        ]);
//        $slug = json_encode([
//            'ar' => Str::slug($request->title_ar),
//            'en' => Str::slug($request->title_en),
//        ]);


        if($request->special_price_start <= date('Y-m-d') && $request->special_price != null){
            if($request->special_price != null){
                if($request->price_type == 1){
                    $price=$request->price-$request->special_price;
                }
                else{
                    $percent= $request->price * $request->special_price / 100;
                    $price= $request->price-$percent;
                    $price=str_replace(',','',number_format($price,2));
                }

            }
            else{
                $price=$request->price;
            }
        }
        else{
            $price=$request->price;
        }

        $term= new Term;
        $term->title=$title;
        $term->slug=$slug;
        $term->status=3;
        $term->type='product';
        $term->user_id=Auth::id();
        $term->save();



        $term_price=new Price;
        $term_price->term_id=$term->id;
        $term_price->price=$price;
        $term_price->regular_price=$request->price;
        $term_price->special_price=$request->special_price ?? null;
        $term_price->price_type=$request->price_type;
        $term_price->starting_date=$request->special_price_start ?? null;
        $term_price->ending_date=$request->special_price_end ?? null;
        $term_price->save();

        $stock=new Stock;
        $stock->term_id = $term->id;
        $stock->stock_manage = $request->stock_manage ?? 0;
        $stock->stock_status = 1;
        $stock->stock_qty = $request->stock_qty ?? 999;
        $stock->sku = $request->sku ?? null;
        $stock->save();


//        $dta['content']=null;
//        $dta['excerpt']=null;
        $dta['content'] = [
            'ar' => null,
            'en' => null,
        ];
        $dta['excerpt'] = [
            'ar' => null,
            'en' => null,
        ];

        $meta=new Meta;
        $meta->term_id = $term->id;
        $meta->key = 'content';
        $meta->value = json_encode($dta);
        $meta->save();

        $title = [
            'ar' => $request->title_ar,
            'en' => $request->title_en,
        ];
        $meta= new Meta;
        $meta->term_id = $term->id;
        $seo['meta_title']=$title;
        $seo['meta_description']=[
            'ar' => null,
            'en' => null,
        ];
        $seo['meta_keyword']=[
            'ar' => null,
            'en' => null,
        ];
        $meta->key = 'seo';
        $meta->value = json_encode($seo);
        $meta->save();

        Session::flash("flash_notification", [
            "level"     => "success",
            "message"   => trans('success')
        ]);


        return redirect()->route('seller.product.edit',$term->id);
    }

    public function store_group(Request $request,$id)
    {
        $request->validate([
            'name_ar' => 'required|max:100',
            'name_en' => 'required|max:100',
        ]);
        $name = json_encode([
            'ar' => $request->name_ar ,
            'en' => $request->name_en ,
        ]);

        $term=Term::where('user_id',Auth::id())->findorFail($id);

        $group= new Termoption;
        $group->user_id=Auth::id();
        $group->term_id=$id;
        $group->name=$name;
        $group->type=1;
        $group->is_required=$request->is_required ?? 0;
        $group->select_type=$request->select_type ?? 0;
        $group->save();

//        return response()->json('Option Created Successfully....!!!');
        return response()->json([trans('success')]);

    }

    public function stock_update(Request $request,$id)
    {


        $term=Term::where('user_id',Auth::id())->findorFail($id);

        $stock= Stock::where('term_id',$id)->first();
        $stock->stock_manage = $request->stock_manage ?? 0;
        $stock->stock_status = $request->stock_status ?? 0;
        $stock->stock_qty = $request->stock_qty ?? 999;
        $stock->sku = $request->sku ?? null;
        $stock->save();

//        return response()->json('Stock Updated Successfully....!!!');
        return response()->json([trans('success')]);

    }

    public function add_row(Request $request)
    {
        $request->validate([
            'name_ar' => 'required|max:100',
            'name_en' => 'required|max:100',
        ]);

        $name = json_encode([
            'ar' => $request->name_ar,
            'en' => $request->name_en,
        ]);

//        dd($name);
        $term=Termoption::where('user_id',Auth::id())->where('type',1)->findorFail($request->row_id);

        $group= new Termoption;
        $group->user_id=Auth::id();
        $group->term_id=$term->term_id;
        $group->name=$name;
        $group->amount=$request->price ?? 0.00;
        $group->amount_type=$request->amount_type;
        $group->type=0;
        $group->p_id=$request->row_id;
        $group->save();

//        return response()->json('Row Created Successfully....!!!');
        return response()->json([trans('success')]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$type="edit")
    {
        if ($type=='edit') {
            $info=Term::with('content','post_categories')->where('user_id',Auth::id())->findorFail($id);

            $cats=[];

            foreach ($info->post_categories as $key => $value) {
                array_push($cats, $value->category_id);
            }
            //dd($info);
            $content=json_decode($info->content->value);
            return view('seller.products.edit.item',compact('info','cats','content'));
        }
        if ($type=='varient') {
            $user_id=Auth::id();
            $info=Term::with('attributes')->where('user_id',$user_id)->findorFail($id);
            $attribute=[];
            $variation=[];

            $variations = collect($info->attributes)->groupBy(function($q){
                return $q->category_id;
            });
            foreach ($variations as $key => $value) {
                array_push($variation,$key);
                foreach($value as $row){
                    array_push($attribute,$row->variation_id);
                }

            }


            $posts=\App\Category::where([
                ['user_id',$user_id],
                ['type','parent_attribute'],
            ])->whereHas('childrenCategories')->with('childrenCategories')->get();
            return view('seller.products.edit.variants',compact('info','posts','variations','attribute'));
        }
        if ($type=='price') {
            $info=Term::with('price')->where('user_id',Auth::id())->findorFail($id);

            return view('seller.products.edit.price',compact('info'));
        }

        if ($type=='image') {
            $info=Term::with('medias')->where('user_id',Auth::id())->findorFail($id);

            return view('seller.products.edit.images',compact('info'));
        }

        if ($type=='files') {
            $info=Term::with('attributes','files')->where('user_id',Auth::id())->findorFail($id);

            return view('seller.products.edit.files',compact('info'));
        }
        if ($type=='option') {
            $info=Term::where('user_id',Auth::id())->with('options')->findorFail($id);

            return view('seller.products.edit.option',compact('info'));
        }

        if ($type=='seo') {
            $info=Term::with('seo')->where('user_id',Auth::id())->findorFail($id);
            $json=$info->seo->value;
            //dd($json);
            return view('seller.products.edit.seo',compact('info','json'));
        }
        if ($type=='inventory') {
            $info=Term::with('stock')->where('user_id',Auth::id())->findorFail($id);

            return view('seller.products.edit.stock',compact('info'));
        }


        if($type == 'express-checkout'){
            $user_id=Auth::id();
            $info=Term::with('attributes','options')->where('user_id',$user_id)->findorFail($id);
            $variations = collect($info->attributes)->groupBy(function($q){
                return $q->attribute->name;
            });
            //return $request=Request()->all();
            return view('seller.products.edit.express',compact('info','variations'));
        }

        abort(404);

    }

    public function variation(Request $request,$id){

        $data=[];
        foreach ($request->child ?? [] as $key => $value) {

            foreach ($value as $r => $child) {
                $dat['category_id']=$key;
                $dat['variation_id']=$child;
                $dat['term_id']=$id;
                array_push($data,$dat);
            }

        }
        Term::where('user_id',Auth::id())->findorFail($id);
        Attribute::where('term_id',$id)->delete();
        if(count($data) > 0){
            Attribute::insert($data);
        }

//       return response()->json('Attributes Updated');
        return response()->json([trans('success')]);
    }

    public function option_delete(Request $request)
    {

        Termoption::where('p_id',$request->id)->where('user_id',Auth::id())->delete();
        Termoption::where('user_id',Auth::id())->where('id',$request->id)->delete();

//        return response()->json('Option Deleted Successfully....!!');
        return response()->json([trans('success')]);
    }
    public function row_update(Request $request)
    {
        $request->validate([
            'name_ar' => 'required|max:100',
            'name_en' => 'required|max:100',
        ]);

        $name = json_encode([
            'ar' => $request->name_ar,
            'en' => $request->name_en,
        ]);

        $option=Termoption::where('user_id',Auth::id())->findorFail($request->id);
        $option->name=$name;
        $option->is_required=$request->is_required ?? 0;
        $option->select_type=$request->select_type ?? 0;
        $option->save();
//        return response()->json('Option Updated Successfully....!!');
        return response()->json([trans('success')]);
    }

    public function option_update(Request $request,$id)
    {

        $user_id=Auth::id();
        foreach($request->options as $key => $option){
            foreach($option as $row){
                foreach($row as $k=> $item){
                    $data['name']=$item['label'];
                    $data['amount']=$item['price'];
                    $data['amount_type']=$item['price_type'];
                    Termoption::where('user_id',$user_id)->where('type',0)->where('p_id',$key)->where('id',$k)->update($data);

                }

            }
        }

//        return response()->json(['Option Updated....!!!']);
        return response()->json([trans('success')]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $title = json_encode([
            'ar' => $request->title_ar,
            'en' => $request->title_en,
        ]);
        $slug=Str::slug($request->title_en);
//        $slug = json_encode([
//            'ar' => $request->slug_ar,
//            'en' => $request->slug_en,
//        ]);

        $info=Term::where('user_id',Auth::id())->findorFail($id);
        $info->title=$title;
        $info->slug=$slug;
        $info->featured=$request->featured;
        $info->status=$request->status ?? 2;
        $info->save();

        $meta=Meta::where('key','content')->where('term_id',$id)->first();
        if (empty($meta)) {
            $meta=new Meta;
            $meta->term_id=$id;
            $meta->type='content';
        }
        //$dta['content']=$request->content;
        //$dta['excerpt']=$request->excerpt;
        $dta['content'] = [
            'ar' => $request->content_ar,
            'en' => $request->content_en,
        ];
        $dta['excerpt'] = [
            'ar' => $request->excerpt_ar,
            'en' => $request->excerpt_en,
        ];

        $meta->value=json_encode($dta);
        $meta->save();

        $catsArr=[];
        foreach ($request->cats ?? [] as $key => $value) {
            if (!empty($value)) {
                $data['category_id']=$value;
                $data['term_id']=$id;

                array_push($catsArr, $data);
            }

        }

        if (!empty($request->brand)) {
            $data['category_id']=$request->brand;
            $data['term_id']=$id;
            array_push($catsArr, $data);
        }

        Postcategory::where('term_id',$id)->delete();
        if (count($catsArr) > 0) {
            Postcategory::insert($catsArr);
        }

//       return response()->json(['Item Updated']);
        return response()->json([trans('success')]);
    }

    public function price(Request $request, $id){

        if($request->special_price_start <= date('Y-m-d') && $request->special_price != null){
            if($request->special_price != null){
                if($request->price_type == 1){
                    $price=$request->price-$request->special_price;
                }
                else{
                    $percent= $request->price * $request->special_price / 100;
                    $price= $request->price-$percent;
                    $price=str_replace(',','',number_format($price,2));
                }

            }
            else{
                $price=$request->price;
            }
        }
        else{
            $price=$request->price;
        }


        $term_price=Price::with('term')->findorFail($id);
        if($term_price->term->user_id != Auth::id()){
            die();
        }
        $term_price->price=$price;
        $term_price->regular_price=$request->price;
        $term_price->special_price=$request->special_price ?? null;
        $term_price->price_type=$request->price_type;
        $term_price->starting_date=$request->special_price_start ?? null;
        $term_price->ending_date=$request->special_price_end ?? null;
        $term_price->save();
//    return response()->json(['Price Updated....!!']);
        return response()->json([trans('success')]);
    }

    public function seo(Request $request, $id)
    {
        $info=Term::where('user_id',Auth::id())->findorFail($id);

        $meta=Meta::where('key','seo')->where('term_id',$id)->first();
        if (empty($meta)) {
            $meta=new Meta;
            $meta->term_id=$id;
            $meta->type='seo';
        }

        $meta_title_ar =$meta->value['meta_title']['ar'];
        $meta_title_en =$meta->value['meta_title']['en'];
        $meta_description_ar =$meta->value['meta_description']['ar'];
        $meta_description_en =$meta->value['meta_description']['en'];
        $meta_keyword_ar =$meta->value['meta_keyword']['ar'];
        $meta_keyword_en =$meta->value['meta_keyword']['en'];

        $data['meta_title']=[
            'ar' => app()->getLocale() == "ar" ? $request->meta_title : $meta_title_ar,
            'en' => app()->getLocale() == "en" ? $request->meta_title : $meta_title_en,
        ];
        $data['meta_description']=[
            'ar' => app()->getLocale() == "ar" ? $request->meta_description : $meta_description_ar,
            'en' => app()->getLocale() == "en" ? $request->meta_description : $meta_description_en,
        ];
        $data['meta_keyword']=[
            'ar' => app()->getLocale() == "ar" ? $request->meta_keyword : $meta_keyword_ar,
            'en' => app()->getLocale() == "en" ? $request->meta_keyword : $meta_keyword_en,
        ];

//       $data['meta_title']=$request->meta_title;
//       $data['meta_description']=$request->meta_description;
//       $data['meta_keyword']=$request->meta_keyword;

        $meta->value=json_encode($data);
        $meta->save();

//       return response()->json(['Seo Updated']);
        return response()->json([trans('success')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param   \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $auth_id=Auth::id();
        if ($request->method=='delete') {
            if ($request->ids) {
                foreach ($request->ids as $id) {

                    $term= Term::with('medias')->where('user_id',$auth_id)->find($id);
                    if (!empty($term)) {
                        foreach ($term->medias as $key => $row) {
                            mediaRemove($row->id);
                        }

                        Term::destroy($id);
                    }
                }
            }
        }
        else{
            if ($request->ids) {
                foreach ($request->ids as $id) {

                    $term= Term::where('user_id',$auth_id)->find($id);
                    if (!empty($term)) {

                        $term->status=$request->method;
                        $term->save();
                    }
                }

            }
        }
//        return response()->json('Success');
        return response()->json([trans('success')]);
    }

    public function import(Request $request)
    {
        $limit=user_limit();
        $posts_count=Term::where('user_id',Auth::id())->count();
        if ($limit['product_limit'] <= $posts_count) {
            $error['errors']['error']='Maximum posts limit exceeded';
            return response()->json($error,401);
        }
        Excel::import(new ProductImport,  $request->file('file'));

//        return response()->json(['Product Imported Successfully']);
        return response()->json([trans('success')]);
    }
}
