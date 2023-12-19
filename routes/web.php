<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/handler', [ProfileController::class, 'handler']);
Route::get('/buku', [BookController::class, 'index']);

Route::get('/dashboard', [BookController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

    Route::middleware('auth')->group(function () {
    Route::post('/books/store', [AdminController::class, 'store'])->name('book.store');
    Route::get('/admin/dashboard', [AdminController::class, 'index']);
    Route::get('/books', [BookController::class, 'index'])->name('books.index');
    Route::get('/loans', [LoanController::class, 'index'])->name('loans.index');
    Route::get('/loans/{book}', [LoanController::class, 'create'])->name('loans.create');
    Route::post('/loans/{book}', [LoanController::class, 'store'])->name('loans.store');
    Route::get('/loans/terminate/{loan}', [LoanController::class, 'terminate'])->name('loans.terminate');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';