<?php

namespace App\Http\Controllers;

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
        $sixCategories = Category::limit(6)->get();
        return view('fe.home', compact('fiveCategories',
            'topStoriesNews',
            'recentNews',
            'sixCategories'
        ));
    }

    public function blogList($id)
    {
        $category = Category::find($id);
        $posts = Post::where('category_id',$id)->orderBy('created_at','desc')->paginate(10);
        return view('fe.blog-list', compact('category', 'posts'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {

    }
}
