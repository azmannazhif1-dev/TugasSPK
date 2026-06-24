<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AtletController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\TesFisikController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    if (auth()->check()) {
        return redirect()->route('dashboard');
    }

    return redirect('/login');

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');


    // =====================
    // ADMIN & PELATIH
    // =====================
    Route::middleware(['role:admin,pelatih'])->group(function () {

        Route::resource('atlet', AtletController::class);

        Route::resource('kriteria', KriteriaController::class);

        Route::resource('tesfisik', TesFisikController::class);

        Route::get('/perhitungan', function () {
            return view('perhitungan.index');
        })->name('perhitungan.index');

        Route::get(
            '/perhitungan/proses',
            [PerhitunganController::class, 'proses']
        )->name('perhitungan.proses');

    });


    // =====================
    // ADMIN, PELATIH & MANAJER
    // =====================
    Route::middleware(['role:admin,pelatih,manajer'])->group(function () {

        Route::get(
            '/ranking',
            [PerhitunganController::class, 'ranking']
        )->name('ranking.index');

        Route::get(
            '/laporan',
            [LaporanController::class, 'index']
        )->name('laporan.index');

        Route::get(
            '/laporan/pdf',
            [LaporanController::class, 'pdf']
        )->name('laporan.pdf');

    });

});


require __DIR__ . '/auth.php';
