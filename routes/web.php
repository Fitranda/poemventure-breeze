<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\KelasSiswaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\PrologController;
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
    Route::get('/siswasoal/{id}', [SoalController::class, 'soalSiswa'])->name('soal.siswa');
    Route::post('/tambahsoal', [SoalController::class, 'store'])->name('soal.store');

    // Narasi
    Route::get('/prolog/{id}', [PrologController::class, 'index'])->name('prolog');
    Route::get('/bab1/{id}', [PrologController::class, 'bab1'])->name('bab1');
    Route::get('/bab2/{id}', [PrologController::class, 'bab2'])->name('bab2');
    Route::get('/bab3/{id}', [PrologController::class, 'bab3'])->name('bab3');
    Route::get('/bab4/{id}', [PrologController::class, 'bab4'])->name('bab4');
    Route::get('/bab5/{id}', [PrologController::class, 'bab5'])->name('bab5');

    Route::get('/map/{id}', function ($id) {
        return view('maps', ['id' => $id]);
    })->name('map');

    Route::get('/bab', function () {
        return view('bab');
    })->name('bab');

    Route::get('/story', function () {
        return view('story');
    });

    Route::get('/profiles', function () {
        return view('profiles');
    });
});




require __DIR__.'/auth.php';
