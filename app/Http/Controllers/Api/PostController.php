<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\Post;
class PostController extends Controller
{
    public function loadPosts($id)
    {
        $posts = Post::where('category_id', $id)->limit(6)
            ->get();
        return view('api.posts', compact('posts'));
    }
}
