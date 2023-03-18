<?php

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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');

Route::get('/events', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('/events/{title}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');


Route::middleware("auth")->group(function () {
    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

    Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'profile'])->name('profile');

    Route::post('/addPost', [\App\Http\Controllers\Admin\PostController::class, 'addPost'])->name('addPost');

    Route::get('/removePost/{title}', [\App\Http\Controllers\Admin\PostController::class, 'removePost'])->name('removePost');
    Route::get('/updatePost/{id}', [\App\Http\Controllers\Admin\PostController::class, 'updatePost'])->name('updatePost');
    Route::post('/updatePostSubmit/{id}', [\App\Http\Controllers\Admin\PostController::class, 'updatePostSubmit'])->name('updatePostSubmit');
    Route::get('/deletePost/{id}', [\App\Http\Controllers\Admin\PostController::class, 'deletePost'])->name('deletePost');

});

Route::middleware("guest")->group(function () {
    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register_process', [\App\Http\Controllers\AuthController::class, 'register'])->name('register_process');


    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login_process', [\App\Http\Controllers\AuthController::class, 'login'])->name('login_process');
});




