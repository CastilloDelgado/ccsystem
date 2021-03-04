<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.appMain');
});

Route::resource('products', ProductController::class);

Route::get('/product/report', function() {
    return view('products.report');
});

Route::get('/login', function () {
    return view('access.login');
});
