<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Term;
use App\Meta;
use Str;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Term::where('type','page')->where('user_id',Auth::id())->paginate(20);
        $post_limit=true;
        return view('seller.store.page.index',compact('posts','post_limit'));
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
         \Session::flash('error', trans('Maximum posts limit exceeded'));
         return back();
        }
         return view('seller.store.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = json_encode([
            'ar' => $request->title_ar,
            'en' => $request->title_en,
        ]);
        $slug = json_encode([
            'ar' => Str::slug($request->title_ar),
            'en' => Str::slug($request->title_en),
        ]);
        $content = json_encode([
            'ar' => $request->content_ar,
            'en' => $request->content_en,
        ]);
        $excerpt = json_encode([
            'ar' => $request->excerpt_ar,
            'en' => $request->excerpt_en,
        ]);
        $term=new Term;
        $term->title=$title;
        $term->user_id=Auth::id();
        $term->status=1;
        $term->type='page';
        //$term->slug=Str::slug($request->title);
        $term->slug=$slug;
        $term->save();

        $meta= new Meta;
        $meta->term_id =$term->id;
        $meta->key ='content';
        $meta->value=$content;
        $meta->save();

        $meta= new Meta;
        $meta->term_id =$term->id;
        $meta->key ='excerpt';
        $meta->value=$excerpt;
        $meta->save();
        return response()->json([trans('success')]);
//        return response()->json(['Pages Created']);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $info=Term::with('content','excerpt')->where('type','page')->where('user_id',Auth::id())->findorFail($id);
        return view('seller.store.page.edit',compact('info'));
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
        $slug = json_encode([
            'ar' => Str::slug($request->title_ar),
            'en' => Str::slug($request->title_en),
        ]);
        $content = json_encode([
            'ar' => $request->content_ar,
            'en' => $request->content_en,
        ]);
        $excerpt = json_encode([
            'ar' => $request->excerpt_ar,
            'en' => $request->excerpt_en,
        ]);
         $info=Term::where('type','page')->where('user_id',Auth::id())->findorFail($id);
         $info->title=$title;
         $info->slug=$slug;
         $info->save();

         $meta=  Meta::where('key','content')->where('term_id',$id)->first();
         $meta->value=$content;
         $meta->save();

         $meta=  Meta::where('key','excerpt')->where('term_id',$id)->first();
         $meta->value=$excerpt;
         $meta->save();


//         return response()->json(['Page Updated']);
        return response()->json([trans('success')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
         $auth_id=Auth::id();
        if ($request->method=='delete') {
           foreach ($request->ids as $key => $id) {
               $post = Term::where('user_id',$auth_id)->findorFail($id);
               $post->delete();
           }

//           return response()->json(['Page Deleted']);
            return response()->json([trans('success')]);
        }


    }
}
