<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostCommentController;



Route::get('/', [PostController::class, 'index'])->name('home');


Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::post('posts/{post:slug}/comments', [PostCommentController::class, 'store'])->middleware('auth');


Route::get('register', [RegisterController::class, 'create'])->middleware('guest');

Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');