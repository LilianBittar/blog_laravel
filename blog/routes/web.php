<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts');
});

Route::get('post', function () {
    return view('post');
});
