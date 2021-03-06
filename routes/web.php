<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Category;

use App\Http\Controllers\ProductController;

use Illuminate\Http\Request;

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

Route::get('/product-grid', function (Product $product,Category $category) {
    return view('product-grid',
        ['product' => Product::all(),
        'category' => $category->all()]   
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

Route::get('/admin', function (Product $product) {
    return view('admin/product/admin',
        ['product' => Product::all()]
    );
});

Route::get('create', function (Category $category) {
    return view('admin/product/create',
        ['category' => Category::all()]
    );
});

Route::get('/edit-{product}', function (Product $product, Category $category) {
    return view('admin/product/edit', [
        'product' => $product,
        'category' => $category->all()
    ]);
});

Route::post('/update_product/{id}', [ProductController::class, 'updateProduct']);

Route::post('/delete-{id}', [ProductController::class, 'deleteProduct']);

Route::get('delete-{id}',[ProductController::class, 'deleteProduct']);

Route::post('/create_product', [ProductController::class, 'createProduct']);