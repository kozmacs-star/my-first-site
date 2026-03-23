<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome', ['name' => 'John']);


Route::get('/contact', function () {
    return view('contact');
});

