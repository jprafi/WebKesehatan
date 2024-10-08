<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('forgot-password');

Route::get('/signup', function () {
    return view('auth.signup');
})->name('signup');

Route::get('/konsultasi1', function () {
    return view('konsultasi1');
})->name('konsultasi1');

Route::get('/home-login', function () {
    return view('auth.home-login');
})->name('home-login');

Route::get('/konsultasi2', function () {
    return view('konsultasi2');
})->name('konsultasi2');

Route::get('/konsultasi3', function () {
    return view('konsultasi3');
})->name('konsultasi3');

Route::get('/artikel', function () {
    return view('auth.artikel');
})->name('artikel');


Route::get('/doctor', function () {
    return view('auth.doctor');
})->name('doctor');

Route::get('/pemesanan-obat', function () {
    return view('pemesanan-obat');  // This will return the view for ordering medicines
})->name('pemesanan-obat');

Route::get('/pemesanan-obat-1', function () {
    return view('pemesanan-obat1');  // This will return the view for ordering medicines
})->name('pemesanan-obat-1');

Route::get('/pemesanan-obat-2', function () {
    return view('pemesanan-obat2');  // This will return the view for ordering medicines
})->name('pemesanan-obat-2');

Route::get('/payment-page-1', function () {
    return view('payment-page1');  // This will return the view for ordering medicines
})->name('payment-page-1');

Route::get('/payment-page-2', function () {
    return view('payment-page2');  // This will return the view for ordering medicines
})->name('payment-page-2');


