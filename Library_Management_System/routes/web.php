<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PrestamosController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\ReadersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas protegidas por autenticación
Route::middleware('auth')->group(function () {
    // Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas para Préstamos
    Route::get('/prestamos', [PrestamosController::class, 'index'])->name('prestamos.index');
    Route::get('/prestamos/create', [PrestamosController::class, 'create'])->name('prestamos.create');
    Route::post('/prestamos', [PrestamosController::class, 'store'])->name('prestamos.store');
    Route::get('/prestamos/{prestamo}/edit', [PrestamosController::class, 'edit'])->name('prestamos.edit');
    Route::put('/prestamos/{prestamo}', [PrestamosController::class, 'update'])->name('prestamos.update');
    Route::delete('/prestamos/{prestamo}', [PrestamosController::class, 'destroy'])->name('prestamos.destroy');

    // Rutas para Books
    Route::get('/books', [BooksController::class, 'index'])->name('books.index');
    Route::get('/books/create', [BooksController::class, 'create'])->name('books.create');
    Route::post('/books', [BooksController::class, 'store'])->name('books.store');
    Route::get('/books/{book}/edit', [BooksController::class, 'edit'])->name('books.edit');
    Route::put('/books/{book}', [BooksController::class, 'update'])->name('books.update');
    Route::delete('/books/{book}', [BooksController::class, 'destroy'])->name('books.destroy');

    // Rutas para Readers
    Route::get('/readers', [ReadersController::class, 'index'])->name('readers.index');
    Route::get('/readers/create', [ReadersController::class, 'create'])->name('readers.create');
    Route::post('/readers', [ReadersController::class, 'store'])->name('readers.store');
    Route::get('/readers/{reader}/edit', [ReadersController::class, 'edit'])->name('readers.edit');
    Route::put('/readers/{reader}', [ReadersController::class, 'update'])->name('readers.update');
    Route::delete('/readers/{reader}', [ReadersController::class, 'destroy'])->name('readers.destroy');

        
});

require __DIR__.'/auth.php';
