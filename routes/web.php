<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;

Route::get('/', function () {
    return view('front.splashScreen');
});

// Route::get('/search', function () {
//     return view('front.search');
// })->name('front.search');
// Route::get('/bookmark', function () {
//     return view('front.bookmark');
// })->name('front.bookmark');
// Route::get('/profile', function () {
//     return view('front.profile');
// })->name('front.profile');

Route::get('/getting-started', function () {
    return view('front.gettingStarted');
});

// Login dan Logout
Route::get('/login', function () {
    return view('front.login');
});
Route::post('/login', [UserController::class, 'login'])->name('user.login');
Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');

Route::get('/register', function () {
    return view('front.register');
});
Route::post('/register', [UserController::class, 'register'])->name('user.register');

Route::get('/forgot-password', function () {
    return view('front.forgotPassword');
});

Route::middleware('auth')->group(function () {
    Route::get('/home', [FrontController::class, 'home'])->name('front.home');
    Route::get('/food/search', [FrontController::class, 'search'])->name('front.search');
    Route::get('/profile',[FrontController::class, 'profile'])->name('front.profile');

    Route::get('/food/tutorial/{food:slug}', [FrontController::class, 'tutorial'])->name('food.tutorial');

    Route::get('/tutorial', [FrontController::class, 'tutorial'])->name('front.tutorial');

    Route::get('/category/{category:slug}', [FrontController::class, 'category'])->name('front.category');

    Route::get('/food/{food:slug}', [FrontController::class, 'food'])->name('food.detail');

    Route::get('/bookmark', [FrontController::class, 'bookmark'])->name('front.bookmark');
    Route::post('/bookmark/{food:slug}/toggle', [FrontController::class, 'toggleBookmark'])->name('bookmark.toggle');
    Route::post('/bookmark/{food:id}/delete', [FrontController::class, 'bookmarkDelete'])->name('bookmark.delete');

    Route::get('/profile/edit', [UserController::class, 'edit'])->name('user.edit');

// Rute untuk memperbarui profil
Route::put('/profile/update', [UserController::class, 'update'])->name('user.update');

Route::get('/password/edit', [UserController::class, 'password'])->name('user.password');

Route::put('/password/update', [UserController::class, 'updatePassword'])->name('user.passwordUpdate');


});

Route::get('/offline', function () {
    return view('modules/laravelpwa/offline');
});
