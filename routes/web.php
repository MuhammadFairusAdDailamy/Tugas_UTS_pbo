<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MatakuliahController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NilaiController;

// Redirect halaman utama langsung ke login
Route::get('/', function () {
    return redirect()->route('login');
});

// Dashboard (hanya untuk user yang sudah login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route Matakuliah (hanya bisa diakses oleh user yang login)
Route::middleware('auth')->group(function () {

   
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    Route::resource('/matakuliah', MatakuliahController::class);

    Route::resource('nilai', NilaiController::class);
});

require __DIR__.'/auth.php';
