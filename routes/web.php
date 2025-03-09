<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    return view('login');
//});

Route::get('/', function () {
    return view('dashboard.index');
});








Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/', [ProductController::class, 'store'])->name('products.store'); // TODO image store
    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::get('/{product}', [ProductController::class, 'show'])->name('products.show');
    Route::patch('/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
});

Route::prefix('customers')->group(function () {
    Route::get('/', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('/create', [CustomerController::class, 'create'])->name('customers.create');
    Route::post('/', [CustomerController::class, 'store'])->name('customers.store');
    Route::get('/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
    Route::get('/{customer}', [CustomerController::class, 'show'])->name('customers.show');
    Route::patch('/{customer}', [CustomerController::class, 'update'])->name('customers.update');
    Route::delete('/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');
});

Route::prefix('employees')->group(function () {
    Route::get('/', [EmployeeController::class, 'index'])->name('employees.index');
    Route::get('/create', [EmployeeController::class, 'create'])->name('employees.create');
    Route::post('/', [EmployeeController::class, 'store'])->name('employees.');
    Route::get('/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
    Route::get('/{employee}', [EmployeeController::class, 'show'])->name('employees.show');
    Route::patch('/{employee}', [EmployeeController::class, 'update'])->name('employees.update');
    Route::delete('/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');
});



Route::prefix('suppliers')->group(function () {
    Route::get('/', [SupplierController::class, 'index'])->name('suppliers.index');
    Route::get('/create', [SupplierController::class, 'create'])->name('suppliers.create');
    Route::post('/', [SupplierController::class, 'store'])->name('suppliers.store');
    Route::get('/{supplier}/edit', [SupplierController::class, 'edit'])->name('suppliers.edit');
    Route::get('/{supplier}', [SupplierController::class, 'show'])->name('suppliers.show');
    Route::patch('/{supplier}', [SupplierController::class, 'update'])->name('suppliers.update');
    Route::delete('/{supplier}', [SupplierController::class, 'destroy'])->name('suppliers.destroy');
});

Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::get('/{category}', [CategoryController::class, 'show'])->name('categories.show');
    Route::patch('/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});

Route::prefix('locations')->group(function () {
    Route::get('/', [LocationController::class, 'index'])->name('locations.index');
    Route::get('/create', [LocationController::class, 'create'])->name('locations.create');
    Route::post('/', [LocationController::class, 'store'])->name('locations.store');
    Route::get('/{location}/edit', [LocationController::class, 'edit'])->name('locations.edit');
    Route::get('/{location}', [LocationController::class, 'show'])->name('locations.show');
    Route::patch('/{location}', [LocationController::class, 'update'])->name('locations.update');
    Route::delete('/{location}', [LocationController::class, 'destroy'])->name('locations.destroy');
});

Route::prefix('sales')->group(function () {
    Route::get('/', [SaleController::class, 'index'])->name('sales.index');
    Route::get('/create', [SaleController::class, 'create'])->name('sales.create');
    Route::post('/', [SaleController::class, 'store'])->name('sales.store');
    Route::get('/{sale}/edit', [SaleController::class, 'edit'])->name('sales.edit');
    Route::get('/{sale}', [SaleController::class, 'show'])->name('sales.show');
    Route::patch('/{sale}', [SaleController::class, 'update'])->name('sales.update');
    Route::delete('/{sale}', [SaleController::class, 'destroy'])->name('sales.destroy');
});




//Route::get('/reports', function () {
//    return view('reports.index');
//});

//Route::get('/dasboard', [SaleController::class, 'index'])->name('dashboard.index');

//Route::get('/clients', function () {
//    return view('customers.index');
//});




Route::get('/register', [RegisteredUserController::class, 'create']);
//Route::post('/register', [RegisteredUserController::class, 'store']);
//
//Route::get('/login', [RegisteredUserController::class, 'create'])->name('login');
//Route::post('/login', [RegisteredUserController::class, 'store']);
//Route::post('/logout', [RegisteredUserController::class, 'destroy']);

//require __DIR__ . '/auth.php';

//
//use App\Http\Controllers\Auth\LoginController;
//
//Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
//Route::post('/login', [LoginController::class, 'login']);
//Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
//
//Route::get('/dashboard', function () {
//    return view('dashboard.index');
//})->middleware('auth')->name('dashboard');
