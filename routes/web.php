<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/blog', function () {
    return view('frontend.blog');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/single', function () {
    return view('frontend.single');
});


//Admin Backend Routes

Route::get('/admin', function () {
    return view('backend.deshborad.index');
});

