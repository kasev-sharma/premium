<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/rooms', function () {
    return view('rooms');
})->name('rooms');

Route::get('/amenities', function () {
    return view('amenities');
})->name('amenities');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
// Add this BELOW the existing /rooms route
Route::get('/rooms/{slug}', function ($slug) {
    return view('room-details');
})->name('room.details');