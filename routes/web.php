<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\DispensadorController;
use App\Http\Controllers\AlimentoController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\usermiddleware;

// Ruta principal para redirigir al home
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Rutas para Login
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Rutas para el Registro
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register');

// Rutas protegidas con middleware
Route::middleware([usermiddleware::class])->group(function () {

    // Ruta para el dashboard
    Route::get('dashboard', [AuthController::class, 'showDashboard'])->name('dashboard');




    // Rutas para Alimentos
    Route::get('alimentos', [AlimentoController::class, 'index'])->name('alimentos.index');
    Route::get('alimentos/create', [AlimentoController::class, 'create'])->name('alimentos.create');
    Route::post('alimentos', [AlimentoController::class, 'store'])->name('alimentos.store');
    Route::get('alimentos/{alimento}/edit', [AlimentoController::class, 'edit'])->name('alimentos.edit');
    Route::put('alimentos/{alimento}', [AlimentoController::class, 'update'])->name('alimentos.update');
    Route::delete('alimentos/{alimento}', [AlimentoController::class, 'destroy'])->name('alimentos.destroy');

    // Rutas para Animales
    Route::get('animales', [AnimalController::class, 'index'])->name('animales.index');
    Route::get('animales/create', [AnimalController::class, 'create'])->name('animales.create');
    Route::post('animales', [AnimalController::class, 'store'])->name('animales.store');
    Route::get('animales/{animal}/edit', [AnimalController::class, 'edit'])->name('animales.edit');
    Route::put('animales/{animal}', [AnimalController::class, 'update'])->name('animales.update');
    Route::delete('animales/{animal}', [AnimalController::class, 'destroy'])->name('animales.destroy');

    // Rutas para Dispensadores
    Route::get('dispensadores', [DispensadorController::class, 'index'])->name('dispensadores.index');
    Route::get('dispensadores/create', [DispensadorController::class, 'create'])->name('dispensadores.create');
    Route::post('dispensadores', [DispensadorController::class, 'store'])->name('dispensadores.store');
    Route::get('dispensadores/{dispensador}/edit', [DispensadorController::class, 'edit'])->name('dispensadores.edit');
    Route::put('dispensadores/{dispensador}', [DispensadorController::class, 'update'])->name('dispensadores.update');
    Route::delete('dispensadores/{dispensador}', [DispensadorController::class, 'destroy'])->name('dispensadores.destroy');
});
