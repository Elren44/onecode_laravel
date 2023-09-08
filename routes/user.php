<?php

use App\Http\Controllers\User\PostController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('user')->middleware(['active'])->group(function () {

    Route::redirect('/', '/user/posts')->name('user');

    Route::get('/posts', [PostController::class, 'index'])->name('user.posts');
    Route::get('/posts/create', [PostController::class, 'create'])->name('user.posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('user.posts.store');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('user.posts.show')->whereNumber('id');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('user.posts.edit')->whereNumber('id');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('user.posts.update')->whereNumber('id');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('user.posts.destroy')->whereNumber('id');
});
