<?php

use App\Livewire\Home;
use App\Http\Middleware\Localization;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Livewire\Services;

Route::get('localization/{locale}',LocalizationController::class)->name('localization');
Route::middleware(Localization::class)->group(function(){
Route::get('/',Home::class)->name('home');
Route::get('/services',Services::class)->name('services');
Route::get('/about',Services::class)->name('contact');
Route::get('/contact',Services::class)->name('about');
});

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

// Route::view('profile', 'profile')
//     ->middleware(['auth'])
//     ->name('profile');

// require __DIR__.'/auth.php';
