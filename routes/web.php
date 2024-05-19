<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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


