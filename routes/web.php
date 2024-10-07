<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

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

require __DIR__.'/auth.php';
