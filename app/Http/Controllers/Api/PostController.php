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

    public function loadPopularPosts($id)
    {
        $posts = Post::where('category_id', $id)
            ->orderBy('view_count', 'DESC')->limit(6)
            ->get();
        return view('api.category.popular-posts', compact('posts'));
    }

    public function loadRecentPosts($id)
    {
        $posts = Post::where('category_id', $id)
            ->orderBy('created_at', 'DESC')->limit(6)
            ->get();
        return view('api.category.recent-posts', compact('posts'));
    }


}
