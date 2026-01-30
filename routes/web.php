<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('Auth.SignIn');
// });

Route::get('/', function () {
    return view('Layout.Content');
});

Route::get('/Sign-up', function () {
    return view('Auth.SignUp');
});

Route::get('/Forgot-Password', function () {
    return view('Auth.ForgotPassword');
});

Route::get('/404-Error', function () {
    return view('Error.404');
});

Route::get('/Form', function () {
    return view('NavSideBar.Form');
});

Route::get('/Dashboard', function () {
    return view('Layout.Content');
});

