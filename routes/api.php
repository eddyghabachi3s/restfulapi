<?php

use App\Http\Controllers\PostsApiController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Contracts\Service\Attribute\Required;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts', [PostsApiController::class, 'index']);

Route::post('/posts', [PostsApiController::class, 'store']);

// Route::put('/posts/{id}', function ($id) {
//     $post = Post::findOrfail($id);
// });

Route::post('/posts/{post}', [PostsApiController::class, 'update']);

Route::delete('/posts/{post}', [PostsApiController::class, 'destroy']);
