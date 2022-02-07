<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {

        $tickerNews = Post::orderBy('created_at', 'desc')->limit(5)->get();
        $firstNews = Post::orderBy('created_at', 'desc')->where('category_id',
            4)->first();
        $secondNews = Post::orderBy('created_at', 'desc')->where('category_id',
            4)->first();
        $thirdNews = Post::orderBy('created_at', 'desc')->where('category_id',
            4)->first();
        $fourNews = Post::orderBy('created_at', 'desc')->where('category_id',
            4)->first();


        $firstCategory = Category::where('id', 4)->first();
        $secondCategory = Category::where('id', 8)->first();//computer
        return view('fe.home', compact('tickerNews',
            'firstNews',
            'secondNews',
            'thirdNews',
            'fourNews',
            'firstCategory',
            'secondCategory'
        ));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {

    }
}
