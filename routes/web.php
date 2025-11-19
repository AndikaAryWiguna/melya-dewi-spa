<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('enduser.layout.home');
});

Route::get('/about', function () {
    return view('enduser.about.view');
});
Route::get('/service', function () {
    return view('enduser.service.view');
});
Route::get('/gallery', function () {
    return view('enduser.gallery.view');
});
Route::get('/contact', function () {
    return view('enduser.contact.view');
});