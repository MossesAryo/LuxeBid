<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.index');
});
Route::get('/umkm', function () {
    return view('front.umkm');
});
Route::get('/help', function () {
    return view('front.pusatbantuan');
});
Route::get('/cabang', function () {
    return view('front.cabangkantor');
});
