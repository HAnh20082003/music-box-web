<?php

use App\Http\Controllers\AuthController;
use App\Http\Middleware\NoCache;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('users.home');
})->name('users.home');

Route::get('/home', function () {
    return redirect()->route('users.home');
});

//login logout sign up
Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return view('login');
    })->name('login');
    Route::get('/signup', function () {
        return view('signup');
    })->name('signup');
});

Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.submit');

Route::post('/logout', function () {
    Auth::logout();
    cookie()->queue(cookie()->forget('user_login'));
    return redirect('/');
})->name('logout');

Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'sendOtp'])->name('password.email');
Route::get('/verify-otp', [AuthController::class, 'showOtpForm'])->name('password.verifyForm');
Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('password.verify');
Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);




Route::get('/detail-playlist', function () {
    return view('users.detail_playlist');
});
