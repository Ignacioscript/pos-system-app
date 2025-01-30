<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/sales', function () {
    return view('sales.index');
});




//Route::prefix('products')->group(function () {
//    Route::get('/', [ProductController::class, 'index']);
//    Route::get('/create', [ProductController::class, 'create']);
//    Route::get('/{product}', [ProductController::class, 'show'])->name('products.show');
//
//    Route::post('/', [ProductController::class, 'store']);
//
//    Route::get('/{product}/edit', [ProductController::class, 'edit']);
//
//    Route::patch('/{product}', [ProductController::class, 'update']);
//    Route::delete('/{product}', [ProductController::class, 'destroy']);
//});


Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index'); //TODO create supplier view to redirect from product index,
    Route::get('/create', [ProductController::class, 'create'])->name('products.create'); // TODO polish the view
    Route::post('/', [ProductController::class, 'store'])->name('products.store'); // TODO image store
    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('products.edit'); //TODO create logic for edit and old data must be shown
    Route::get('/{product}', [ProductController::class, 'show'])->name('products.show'); // TODO works on features
    Route::patch('/{product}', [ProductController::class, 'update'])->name('products.update'); //TODO logic in controller
    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('products.destroy'); // TODO logic
});




Route::get('/reports', function () {
    return view('reports.index');
});

Route::get('/clients', function () {
    return view('customers.index');
});




Route::get('/register', [RegisteredUserController::class, 'create']);
//Route::post('/register', [RegisteredUserController::class, 'store']);
//
//Route::get('/login', [RegisteredUserController::class, 'create'])->name('login');
//Route::post('/login', [RegisteredUserController::class, 'store']);
//Route::post('/logout', [RegisteredUserController::class, 'destroy']);

//require __DIR__ . '/auth.php';
