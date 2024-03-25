<?php

use App\Http\Controllers\C_titles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::resource('titles', C_titles::class);

Route::get('/', function () {
    return view('welcome');
});
