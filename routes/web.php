<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/dari-adi-saputra-dan-rismawati/kepada-yth/', 'adidanrisma');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth', 'verified'])
    ->name('profile');

Route::view('/daftar-tamu', 'livewire.tamu.list-tamu')
    ->middleware(['auth', 'verified'])
    ->name('daftar-tamu');

require __DIR__.'/auth.php';