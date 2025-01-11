<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;

Route::get('/', function () {
    return view('front.splashScreen');
});

Route::get('/search', function () {
    return view('front.search');
})->name('front.search');
Route::get('/bookmark', function () {
    return view('front.bookmark');
})->name('front.bookmark');
Route::get('/profile', function () {
    return view('front.profile');
})->name('front.profile');

Route::get('/getting-started', function () {
    return view('front.gettingStarted');
});

// Login dan Logout
Route::get('/login', function () {
    return view('front.login');
});
Route::post('/login', [UserController::class, 'login'])->name('user.login');
Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');

Route::middleware('auth')->group(function () {
    Route::get('/home', [FrontController::class, 'home'])->name('front.home');

    Route::get('/detail', [FrontController::class, 'detail'])->name('front.detail');

    Route::get('/tutorial', [FrontController::class, 'tutorial'])->name('front.tutorial');

    Route::get('/category', [FrontController::class, 'category'])->name('front.category');

});
