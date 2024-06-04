<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;

// routes/web.php
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
// Route::get('/', [ProductController::class, 'index'])->name('home');
    
// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index']);

Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');


Route::post('/join-us', [ApplicationController::class, 'store'])->name('join-us.store');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/how-we-work', function () {
    return view('how-we-work');
});

Route::get('/join-us', function () {
    return view('join-us');
});

Route::get('/available-jobs', function () {
    return view('available-jobs');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);

// Route::get('/mainpage', function () {
//     return view('mainpage');
// });


// Route::get('/our-carers', function () {
//     return view('ourcarers');
// });


