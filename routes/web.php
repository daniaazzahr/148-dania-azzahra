<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/order', function () {
    return view('order', ['title' => 'Order Now!']);
});

Route::get('/faq', function () {
    return view('faq', ['title' => 'FAQ']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Send us a message!']);
});
