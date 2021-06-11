<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Category;
use Str;
class ChildattributeController extends Controller
{



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $limit=user_limit();
         $posts_count1=Category::where('user_id',Auth::id())->where('type','child_attribute')->count();
         $posts_count2=Category::where('user_id',Auth::id())->where('type','parent_attribute')->count();
          $posts_count=$posts_count1+$posts_count2;
         if ($limit['variation_limit'] <= $posts_count) {
          $error['errors']['error']=trans('Maximum Attribute limit exceeded');
          return response()->json($error,401);
         }

        $validatedData = $request->validate([
         'title_ar' => 'required|max:20',
         'title_en' => 'required|max:20',
         'parent_attribute' => 'required',
        ]);

        $title = json_encode([
            'ar' => $request->title_ar,
            'en' => $request->title_en,
        ]);
//        $slug = json_encode([
//            'ar' => Str::slug($request->title_ar),
//            'en' => Str::slug($request->title_en),
//        ]);
        $slug = Str::slug($request->title_en);
        $user_id=Auth::id();
        $info=Category::where([
            ['user_id',$user_id],
            ['type','parent_attribute'],
        ])->findorFail($request->parent_attribute);

        $post=new Category;
        $post->user_id=$user_id;
        $post->type='child_attribute';
        $post->name=$title;
        $post->p_id=$request->parent_attribute;
        $post->featured=$request->featured;
        $post->slug=$slug;
        $post->save();

//        return response()->json(['Attribute Created']);
        return response()->json([trans('success')]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info= Category::where([
            ['type','parent_attribute'],
            ['user_id',Auth::id()]
        ])->with('childrenCategories')->findorFail($id);

        return view('seller.attributes.childAttributes.create',compact('info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info= Category::where([
            ['type','child_attribute'],
            ['user_id',Auth::id()]
        ])->find($id);

         return view('seller.attributes.childAttributes.edit',compact('info'));
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
        $validatedData = $request->validate([
         'title_ar' => 'required|max:20',
         'title_en' => 'required|max:20',
         'parent_attribute' => 'required',
        ]);

        $title = json_encode([
            'ar' => $request->title_ar,
            'en' => $request->title_en,
        ]);

        $post= Category::where([
            ['type','child_attribute'],
            ['user_id',Auth::id()]
        ])->findorFail($id);
        $post->name=$title;
        $post->p_id=$request->parent_attribute;
        $post->featured=$request->featured;
        $post->save();

//        return response()->json(['Attribute Updated']);
        return response()->json([trans('success')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user_id=Auth::id();
        if ($request->type=='delete') {
            foreach ($request->ids as $key => $id) {
               $post= Category::where([
                ['type','child_attribute'],
                ['user_id',$user_id]
               ])->findorFail($id);
               $post->delete();
            }
        }

//        return response()->json(['Attribute Deleted']);
        return response()->json([trans('success')]);
    }
}
