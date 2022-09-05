<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/register', [RegisterController::class, 'viewRegister'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'proccessRegister']);

Route::get('/login', [LoginController::class, 'viewLogin'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/', [PostController::class, 'index']);
Route::post('/', [PostController::class, 'addPost'])->middleware(['auth', 'isUser']);

Route::prefix('/profile')->middleware(['auth'])->group(function () {
    Route::get('/', [ProfileController::class, 'index'])->name('profile.view');
    Route::get('/setting', [ProfileController::class, 'viewProfile'])->name('profile.setting');
    Route::post('/setting', [ProfileController::class, 'editProfile']);
});

Route::post('/comment', [CommentController::class, 'addComment'])->name('comment.add')->middleware(['auth', 'isUser']);

Route::get('/banned', function () {
    return view('banned');
});
