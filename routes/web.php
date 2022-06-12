<?php

use Illuminate\Support\Facades\Route;

Route::get('/pages', function(){
    return view('home');
});

Route::get('pages/about-us', function(){
    return view('about');
});