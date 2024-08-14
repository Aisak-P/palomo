<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\PromocionesController;
use App\Http\Controllers\HombreController;
use App\Http\Controllers\MujerController;
use App\Http\Controllers\NiñosController;
use App\Http\Controllers\CalzadoController;

Route::get('/', [InicioController::class, 'inicio']);
Route::get('/promociones', [PromocionesController::class, 'promociones']);
Route::get('/hombre', [HombreController::class, 'hombre']);
Route::get('/mujer', [MujerController::class, 'mujer']);
Route::get('/niños', [NiñosController::class, 'niños']);
Route::get('/calzado', [CalzadoController::class, 'calzado']);

Route::get('#', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



