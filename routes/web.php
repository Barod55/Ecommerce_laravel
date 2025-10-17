<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    $results = DB::table('categories')->get();
    return view('home', ['categories' => $results]);
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/404', function () {
    return view('404');
})->name('404');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/check_out', function () {
    return view('check_out');
})->name('check_out');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/single_news', function () {
    return view('single_news');
})->name('single_news');

Route::get('/single_product', function () {
    return view('single_product');
})->name('single_product');


Route::get('/products', function () {
    $resutls = DB::table('products')->get();
    return view('products',['products' => $resutls]);
})->name('products');
