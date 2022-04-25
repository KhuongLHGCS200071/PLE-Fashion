<?php

use Illuminate\Support\Facades\Route;

use App\Models\Product;
use App\Models\Category;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/product-details', function () {
    return view('product-details');
});

Route::get('/product-details-{product}', function (Product $product) {
    return view('product-details', [
        'product' => $product
    ]);
});

Route::get('/product-grid', function (Product $product) {
    return view('product-grid',
        ['product' => Product::all()]   
    );
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/admin', function () {
    return view('admin/product/admin');
});

Route::get('/create', function () {
    return view('admin/product/create');
});