<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('products.index');
})->name('products.index');

Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard 
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // User Management


    // Profile 
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/my-orders', [OrderController::class, 'index'])->name('orders.index');

});

require __DIR__ . '/auth.php';
