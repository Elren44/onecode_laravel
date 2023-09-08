<?php

use App\Http\Controllers\Admin\PostController;
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

Route::prefix('admin')->middleware(['active', 'admin'])->group(function () {

    Route::redirect('/', '/admin/posts' )->name('admin');

    Route::get('/posts', [PostController::class, 'index'])->name('admin.posts');
    Route::get('/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('admin.posts.store');
    Route::get('/posts/{post}', [PostController::class, 'show'])->name('admin.posts.show')->whereNumber('id');
    Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('admin.posts.edit')->whereNumber('id');
    Route::put('/posts/{post}', [PostController::class, 'update'])->name('admin.posts.update')->whereNumber('id');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('admin.posts.destroy')->whereNumber('id');
});


