<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::prefix('admin')->group(function (){
    Route::get('/dashboard', [AdminController::class, 'index'])->middleware(['admin'])->name('dashboard');
});

Route::resource('profile', ProfileController::class)->middleware(['auth'])->except('create','store','index');
Route::resource('posts', PostController::class)->middleware(['auth'])->except('show');
Route::get('posts/{id}', [PostController::class, 'show'])->middleware(['auth'])->name('posts.show');
Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.add');
Route::post('/like/store', [LikeController::class, 'store'])->name('like.add');
Route::get('/', function () {
    return redirect('/login');
});

// if the user 
require __DIR__.'/auth.php';
