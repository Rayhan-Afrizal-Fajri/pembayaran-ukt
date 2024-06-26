<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('Home');
});
Route::get('/pembayaran', function () {
    return view('pembayaran');
});

