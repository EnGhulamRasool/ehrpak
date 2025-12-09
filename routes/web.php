<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\CandidateAuthController;
use App\Http\Controllers\Candidate\DashboardController as CandidateDashboardController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Home Page
Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Login routes (بغیر login کے)
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [AdminAuthController::class, 'login']);
    });

    // Protected routes (login کے بعد)
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
    });
});

// Candidate Routes
Route::prefix('candidate')->name('candidate.')->group(function () {
    // Guest routes
    Route::middleware('guest')->group(function () {
        Route::get('/login', [CandidateAuthController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [CandidateAuthController::class, 'login']);
        Route::get('/register', [CandidateAuthController::class, 'showRegisterForm'])->name('register');
        Route::post('/register', [CandidateAuthController::class, 'register']);
    });

    // Protected routes
    Route::middleware(['auth', 'candidate'])->group(function () {
        Route::get('/dashboard', [CandidateDashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [CandidateAuthController::class, 'logout'])->name('logout');
    });
});
