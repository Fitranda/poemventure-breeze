<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\KelasSiswaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SoalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('screen');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboardsiswa', function () {
    return view('dashboardsiswa');
})->middleware(['auth', 'verified'])->name('dashboardsiswa');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Guru Kelas
    Route::get('/kelasguru', [KelasController::class, 'index'])->name('kelasguru');
    Route::get('/tambahkelasguru', [KelasController::class, 'create'])->name('tambahkelasguru');
    Route::post('/tambahkelasguru', [KelasController::class, 'store'])->name('kelasguru.store');
    Route::post('/editkelasguru', [KelasController::class, 'update'])->name('kelasguru.update');
    Route::get('/detailkelasguru/{id}',[KelasController::class, 'show'])->name('detailkelasguru');

    // Siswa Kelas
    Route::get('/kelassiswa', [KelasSiswaController::class, 'index'])->name('kelassiswa');
    Route::get('/tambahkelassiswa', [KelasSiswaController::class, 'create'])->name('tambahkelassiswa');
    Route::post('/tambahkelassiswa', [KelasSiswaController::class, 'store'])->name('kelassiswa.store');

    // Siswa Kelas
    Route::get('/soal/{id}', [SoalController::class, 'show'])->name('soal');
    Route::get('/tambah/{id}', [SoalController::class, 'create'])->name('soal.crete');
    Route::post('/tambahsoal', [SoalController::class, 'store'])->name('soal.store');

    Route::get('/map', function () {
        return view('maps');
    });

    Route::get('/bab', function () {
        return view('bab');
    });
});




require __DIR__.'/auth.php';
