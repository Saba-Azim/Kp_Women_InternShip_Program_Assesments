<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublishersController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



//  Only Admin can access everything
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('purchase', PurchaseController::class);
    Route::resource('suppliers', SuppliersController::class);
    Route::resource('users', UserController::class);
});

//  Both Admin & Staff can access these
Route::middleware(['auth', 'role:admin,staff'])->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('books', BooksController::class);
    Route::resource('authors', AuthorsController::class);
    Route::resource('publishers', PublishersController::class);

    // Sales: staff can create, admin can see all
    Route::resource('sales', SalesController::class);
});

require __DIR__.'/auth.php';
