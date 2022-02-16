<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {

        $fiveCategories = Category::limit(5)->get();
        $topStoriesNews = Post::where('type', 2)
            ->orderBy('created_at', 'desc')->limit(4)->get();
        $recentNews = Post::orderBy('created_at', 'desc')->limit(3)->get();
        $bestStories = Post::orderBy('view_count', 'desc')->limit(3)->get();
        $sixCategories = Category::limit(5)->get();
        return view('fe.home', compact('fiveCategories',
            'topStoriesNews',
            'recentNews',
            'sixCategories'
        ));
    }

    public function blogList($id)
    {
        $category = Category::find($id);
        $topStoriesNews = Post::where('type', 2)
            ->orderBy('created_at', 'desc')->limit(4)->get();
        $posts = Post::where('category_id', $id)->orderBy('created_at', 'desc')->paginate(10);
        return view('fe.blog-list', compact('category',
            'posts', 'topStoriesNews'));
    }

    public function postDetail($id)
    {
        $post = Post::find($id);
        $post->view_count = $post->view_count + 1;
        $post->save();
        $topStoriesNews = Post::where('type', 2)
            ->orderBy('created_at', 'desc')->limit(4)->get();
        $categoryId = $post->category->id;
        $relativePosts = Post::where('category_id', $categoryId)
            ->orderBy('created_at', 'desc')->limit(4)->get();
        return view('fe.detail', compact('post',
            'topStoriesNews', 'relativePosts'));
    }

    public function search(Request $request)
    {
        $query = $request->query('query');
        $posts = Post::where('title', 'LIKE', '%' . $query . '%')
            ->orWhere('short_description', 'LIKE', '%' . $query . '%')
            ->orWhere('content', 'LIKE', '%' . $query . '%')
            ->get();
        $topStoriesNews = Post::where('type', 2)
            ->orderBy('created_at', 'desc')->limit(4)->get();
        return view('fe.search', compact('posts', 'query', 'topStoriesNews'));
    }

    public function addComment(Request $request)
    {
        $message = $request->message;
        $comment = new Comment();
        $comment->post_id = $request->post_id;
        $comment->message = $message;
        $comment->user_id = \Auth::user()->id;
        $comment->save();
        return redirect()->back();
    }

    public function contact()
    {

    }
}
