<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

route::get('/about',function () {
    //return 'About page';
    return view ('about');
});

route::get('/post',function () {
    //return 'Post page';
    return view ('post');
});

route::get('/profile',function () {
    //return 'Profile page';
    return view ('profile');
});

route::get('/contact',function () {
    //return 'Profile page';
    return view ('contact');
});

route::view('link','/link');
    
