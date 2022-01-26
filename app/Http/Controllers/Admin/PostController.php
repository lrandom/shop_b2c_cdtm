<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller implements ICrud
{
    //
    public function index()
    {
        // TODO: Implement index() method.
        $list = Post::orderBy('id', 'DESC')->paginate(10);
        return view('be.post.index', compact('list'));
    }

    public function add()
    {
        // TODO: Implement add() method.
        $categories = Category::all();
        return view('be.post.add', compact('categories'));
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function doAdd(Request $request)
    {
        // TODO: Implement doAdd() method.
        $title = $request->title;
        $content = $request->input('content');
        $shortDescription = $request->short_description;
        $metaKeyword = $request->meta_keyword;
        $metaDescription = $request->meta_description;
        $categoryId = $request->category_id;
        $type = $request->type;

        try {
            $post = Post::create([
                'title' => $title,
                'content' => htmlentities($content),
                'short_description' => $shortDescription,
                'meta_keyword' => $metaKeyword,
                'meta_description' => $metaDescription,
                'category_id' => $categoryId,
                'type' => $type,
                'user_id' => 1
            ]);

            //thêm ảnh
            if ($request->hasFile('thumbnail')) {
                $thumbnail = $request->file('thumbnail');
                $newFileName = time() . '.' . $thumbnail->getClientOriginalExtension();
                $thumbnail->storeAs("/images/posts",
                    $newFileName,
                    'public');
                $post->thumbnail_path = 'storage/images/posts/' . $newFileName;
                $post->save();
            }

        } catch (\Exception $e) {
            return redirect()->back()->with('error', "Add failed");
        }

        //chuyển hướng về trang  danh sách
        return redirect()->route('admin.post.list')
            ->with('success', 'Add successfully');
    }

    public function doEdit($id, Request $request)
    {
        // TODO: Implement doEdit() method.
    }

}
