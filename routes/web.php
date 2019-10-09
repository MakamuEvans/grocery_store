<?php

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
    $page = 'index';
    return view('welcome', compact('page'));
});
Route::get('/contact-us', function () {
    $page = 'contact-us';
    return view('contact-us', compact('page'));
});
Route::get('/products', function () {
    $page = 'products';
    return view('products', compact('page'));
});
