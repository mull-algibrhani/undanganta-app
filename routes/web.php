<?php

use App\Http\Controllers\UndanganController;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Tamu\CreateTamu;
use App\Livewire\Tamu\EditTamu;
use App\Livewire\Tamu\ListReservasi;
use App\Livewire\Tamu\ListTamu;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
// Route::view('/dari-adi-saputra-dan-rismawati/kepada-yth-{slug}', 'adi-dan-risma');
Route::get('/dari-muh-safri-dan-ika-irawati/kepada-yth-{slug}', [UndanganController::class, 'sigle_undangan'])->name('sigle_undangan');
Route::post('/submit-rsvp', [UndanganController::class, 'save_rsvp'])->name('submit-rsvp');

Route::view('profile', 'livewire.profile.profile')
    ->middleware(['auth', 'verified'])
    ->name('profile');

Route::middleware(['auth', 'verified'])->get('/dashboard', Dashboard::class)->name('dashboard');
Route::middleware(['auth', 'verified'])->get('/daftar-tamu', ListTamu::class)->name('daftar-tamu');
Route::middleware(['auth', 'verified'])->get('/tambah-tamu', CreateTamu::class)->name('create-tamu');
Route::middleware(['auth', 'verified'])->get('/edit-tamu/{id}', EditTamu::class)->name('edit-tamu');

Route::middleware(['auth', 'verified'])->get('/daftar-tamu-reservasi', ListReservasi::class)->name('daftar-tamu-reservasi');

require __DIR__ . '/auth.php';
