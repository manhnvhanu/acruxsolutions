<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('trangchu');
});

Route::get('product', function () {
    return view('sanpham');
});

Route::get('intro', function () {
    return view('gioithieu');
});

Route::get('news', function () {
    return view('tintuc');
});

Route::get('single', function () {
    return view('single');
});


Route::get('contact', function () {
    return view('lienhe');
});

Route::get('sanpham', function () {
    return view('sanpham');
});

Route::get('tintuc', function () {
    return view('tintuc');
});