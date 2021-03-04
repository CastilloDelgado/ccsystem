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

Route::resources([
    'products' => ProductController::class,
    'sales' => SaleController::class
]);

Route::get('/reports/products', function() {
    return view('reports.products');
});

Route::get('/login', function () {
    return view('access.login');
});
