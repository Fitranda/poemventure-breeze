<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\KelasSiswaController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\StoryController;
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
    Route::get('/kelasguru', [KelasController::class, 'tampilkelas'])->name('kelasguru');
    Route::get('/tambahkelasguru', [KelasController::class, 'tambahkelasguru'])->name('tambahkelasguru');
    Route::post('/tambahkelasguru', [KelasController::class, 'simpankelasguru'])->name('kelasguru.store');
    Route::post('/editkelasguru', [KelasController::class, 'update'])->name('kelasguru.update');
    Route::get('/detailkelasguru/{id}',[KelasController::class, 'detailkelasguru'])->name('detailkelasguru');

    // Siswa Kelas
    Route::get('/kelassiswa', [KelasSiswaController::class, 'tampilkelas'])->name('kelassiswa');
    Route::get('/tambahkelassiswa', [KelasSiswaController::class, 'tambahkelas'])->name('tambahkelassiswa');
    Route::post('/tambahkelassiswa', [KelasSiswaController::class, 'simpan'])->name('kelassiswa.store');

    // Siswa Kelas
    Route::get('/soal/{id}', [SoalController::class, 'tampilsoal'])->name('soal');
    Route::get('/tambah/{id}', [SoalController::class, 'buatsoal'])->name('soal.crete');
    Route::post('/jumlah/{id}', [SoalController::class, 'jumlahsoal'])->name('soal.jumlah');
    Route::get('/siswasoal/{id}', [SoalController::class, 'soalSiswa'])->name('soal.siswa');
    Route::post('/tambahsoal', [SoalController::class, 'simpan'])->name('soal.store');

    // Narasi
    Route::get('/prolog/{id}', [StoryController::class, 'prolog'])->name('prolog');
    Route::get('/bab1/{id}', [StoryController::class, 'bab1'])->name('bab1');
    Route::get('/bab2/{id}', [StoryController::class, 'bab2'])->name('bab2');
    Route::get('/bab3/{id}', [StoryController::class, 'bab3'])->name('bab3');
    Route::get('/bab4/{id}', [StoryController::class, 'bab4'])->name('bab4');
    Route::get('/bab5/{id}', [StoryController::class, 'bab5'])->name('bab5');

    Route::get('/map/{id}', [MapController::class, 'tampilMap'])->name('map');

    // Route::get('/map/{id}', function ($id) {
    //     return view('maps', ['id' => $id]);
    // })->name('map');

    Route::get('/bab', function () {
        return view('bab');
    })->name('bab');

    Route::get('/story', function () {
        return view('story');
    });

    Route::get('/profiles', [ProfileController::class, 'show'])->name('profile');
});




require __DIR__.'/auth.php';
