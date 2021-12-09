<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminController;
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
    // Route::get('/admin/dashboard', function () {
    //     return view('admin.dashboard');
    // })->middleware(['admin'])->name('dashboard');
    Route::get('/dashboard', [AdminController::class, 'show'])->middleware(['admin'])->name('dashboard');
});


Route::resource('posts', PostController::class)->middleware(['auth']);
Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.add');
Route::get('/', function () {
    return redirect('/login');
});

// if the user 
require __DIR__.'/auth.php';
