<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');

    // Tambahan untuk CRUD Siswa
    Route::resource('siswa', SiswaController::class);
});

require __DIR__.'/settings.php';