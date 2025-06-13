<?php

use App\Http\Controllers\AuthController;
use App\Http\Middleware\NoCache;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

//login logout sign up
Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return view('login');
    })->name('login');
});

Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/logout', function () {
    Auth::logout();
    cookie()->queue(cookie()->forget('user_login'));
    return redirect('/login');
})->name('logout');

Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'sendOtp'])->name('password.email');
Route::get('/verify-otp', [AuthController::class, 'showOtpForm'])->name('password.verifyForm');
Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('password.verify');
Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);
