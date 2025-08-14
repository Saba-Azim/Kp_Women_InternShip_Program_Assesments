<?php

use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublishersController;
use App\Http\Controllers\VendorsController;
use App\Models\Authors;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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

Route::resource('categories',CategoryController::class);
Route::resource('books',BooksController::class);
Route::resource('authors',AuthorsController::class);
Route::resource('publishers',PublishersController::class);
Route::resource('vendors',VendorsController::class);

require __DIR__.'/auth.php';
