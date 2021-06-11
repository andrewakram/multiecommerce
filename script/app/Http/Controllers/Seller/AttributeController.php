<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Category;
use Str;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Category::where([
            ['user_id', Auth::id()],
            ['type', 'parent_attribute'],
        ])->with('childrenCategories')->withCount('parent_variation')->get();

        return view('seller.attributes.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seller.attributes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $limit = user_limit();

        $posts_count1 = Category::where('user_id', Auth::id())->where('type', 'child_attribute')->count();
        $posts_count2 = Category::where('user_id', Auth::id())->where('type', 'parent_attribute')->count();
        $posts_count = $posts_count1 + $posts_count2;
        if ($limit['variation_limit'] <= $posts_count) {
            $error['errors']['error'] = trans('Maximum Attribute limit exceeded');
            return response()->json($error, 401);
        }


        $validatedData = $request->validate([
            'title_ar' => 'required|max:20',
            'title_en' => 'required|max:20',
        ]);

        $title = json_encode([
            'ar' => $request->title_ar,
            'en' => $request->title_en,
        ]);

        $post = new Category;
        $post->user_id = Auth::id();
        $post->type = 'parent_attribute';
        $post->name = $title;
        $post->featured = $request->featured;
        $post->slug = Str::slug($request->title_en);
        $post->save();

//        return response()->json(['Attribute Created']);
        return response()->json([trans('success')]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Category::where([
            ['type', 'child_attribute'],
            ['p_id', $id],
            ['user_id', Auth::id()]
        ])->with('parent')->withCount('variations')->get();

        return view('seller.attributes.childAttributes.index', compact('posts', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = Category::where([
            ['type', 'parent_attribute'],
            ['user_id', Auth::id()]
        ])->findorFail($id);

        return view('seller.attributes.edit', compact('info'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title_ar' => 'required|max:20',
            'title_en' => 'required|max:20',
        ]);
        $title = json_encode([
            'ar' => $request->title_ar,
            'en' => $request->title_en,
        ]);

        $post = Category::where([
            ['type', 'parent_attribute'],
            ['user_id', Auth::id()]
        ])->findorFail($id);
        $post->name = $title;
        $post->featured = $request->featured;
        $post->save();

//        return response()->json(['Attribute Updated']);
        return response()->json([trans('success')]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user_id = Auth::id();
        if ($request->method == 'delete') {
            foreach ($request->ids as $key => $id) {
                $post = Category::where([
                    ['type', 'parent_attribute'],
                    ['user_id', $user_id]
                ])->findorFail($id);
                $post->delete();
            }
        }

//        return response()->json(['Attribute Deleted']);
        return response()->json([trans('success')]);
    }
}
