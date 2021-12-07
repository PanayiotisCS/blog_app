<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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


if(Auth::user() && Auth::user()->type == 1){
    Route::prefix('admin')->group(function (){
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['auth'])->name('dashboard');
        // Route::get('/users', function(){
    
        // });
    });
}

Route::resource('posts', PostController::class)->middleware(['auth']);

Route::get('/', function () {
    return redirect('/login');
});

// if the user 
require __DIR__.'/auth.php';
