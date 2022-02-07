<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Post;
use App\Models\TagPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

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
        $post = Post::find($id);
        $categories = Category::all();
        $tags = $post->tags;
        // dd($tags);
        $tagsName = $tags->map(function ($item) {
            return $item->name;
        })->toArray();
        $tagsName = implode(',', $tagsName);

        $tagsId = $tags->map(function ($item) {
            return $item->id;
        })->toArray();
        $tagsId = implode(',', $tagsId);
        return view('be.post.edit', compact('post',
            'categories', 'tagsName', 'tagsId'));
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }

    public function doAdd(Request $request)
    {
        // TODO: Implement doAdd() method.
        $title = $request->title;
        $content = htmlentities($request->input('content'));
        $shortDescription = $request->short_description;
        $metaKeyword = $request->meta_keyword;
        $metaDescription = $request->meta_description;
        $categoryId = $request->category_id;
        $type = $request->type;
        $tagsIds = $request->tags;//1,2,3,4,5-> [1,2,3,4,5]

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

            //chèn tag vào tag_posts
            $tagsIds = explode(',', $tagsIds);
            foreach ($tagsIds as $tagId) {
                TagPost::create([
                    'post_id' => $post->id,
                    'tag_id' => $tagId
                ]);
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
        $title = $request->title;
        $content = htmlentities($request->input('content'));
        $shortDescription = $request->short_description;
        $metaKeyword = $request->meta_keyword;
        $metaDescription = $request->meta_description;
        $categoryId = $request->category_id;
        $type = $request->type;

        try {
            $post = Post::where('id', $id)->update([
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
                try {
                    if ($post->thumbnail_path)
                        Storage::delete($post->thumbnail_path);
                } catch (\Exception $e) {

                }

                $thumbnail = $request->file('thumbnail');
                $newFileName = time() . '.' . $thumbnail->getClientOriginalExtension();
                $thumbnail->storeAs("/images/posts",
                    $newFileName,
                    'public');
                //$post->thumbnail_path = 'storage/images/posts/' . $newFileName;
                //$post->save();
                Post::where('id', $id)->update([
                    'thumbnail_path' => 'storage/images/posts/' . $newFileName
                ]);
            }

        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with('error', "Edit failed");
        }

        //chuyển hướng về trang  danh sách
        return redirect()->route('admin.post.list')
            ->with('success', 'Edit successfully');
    }

    public function search(Request $request)
    {
        $query = $request->query('query');
        $list = Post::where('title', 'like', '%' . $query . '%')
            ->orWhere('content', 'like', '%' . $query . '%')
            ->orWhere('short_description', 'like', '%' . $query . '%')
            ->paginate(10);
        return view('be.post.index', compact('list'));
    }

}
