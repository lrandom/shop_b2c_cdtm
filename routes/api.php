<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Tag;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/tags', function (Request $request) {
    $tags = Tag::where('name', 'LIKE', "%{$request->term}%")->get();
    $newTags = $tags->map(function ($item) {
        return [
            'tag' => $item->name,
            'value' => $item->id
        ];
    });
    return response()->json([
        'suggestions' => $newTags,
    ]);
})->name('api.tags.search');

Route::get('/posts/{id}', [
    \App\Http\Controllers\Api\PostController::class, 'loadPosts'
])->name('api.posts.load');
