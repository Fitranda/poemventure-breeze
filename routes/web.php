<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\KelasSiswaController;
use App\Http\Controllers\ProfileController;
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

    // Siswa Kelas
    Route::get('/kelassiswa', [KelasSiswaController::class, 'index'])->name('kelassiswa');
    Route::get('/tambahkelassiswa', [KelasSiswaController::class, 'create'])->name('tambahkelassiswa');
    Route::post('/tambahkelassiswa', [KelasSiswaController::class, 'store'])->name('kelassiswa.store');

    Route::get('/map', function () {
        return view('maps');
    });
});



require __DIR__.'/auth.php';
