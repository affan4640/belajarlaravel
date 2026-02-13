<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view(uri:'/belajar', view:'/belajar');
Route::view(uri:'/belajar2', view:'/belajar2');
