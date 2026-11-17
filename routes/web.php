<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;

# SITE
Route::get('/', [App\Http\Controllers\SiteController::class, 'index'])->name('index')-> name('site.index');

# LOGIN
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login')-> name('site.login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login.post');

Route::middleware('auth')->group(function () {
    // DASHBOARD
    Route::get('/dashboard', [App\Http\Controllers\SiteController::class, 'dashboard'])->name('dashboard')->name('site.dashboard');
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
});