<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

// ====================
// PUBLIC ROUTES
// ====================
Route::get('/', [ShopController::class, 'index'])->name('shop.index');
Route::get('/products/{product}', [ShopController::class, 'show'])->name('shop.show');
Route::get('/cart', [ShopController::class, 'cart'])->name('cart');

// ====================
// PROTECTED ROUTES (Require login)
// ====================
Route::middleware(['auth'])->group(function () {
    Route::post('/cart/add/{productId}', [ShopController::class, 'addToCart'])->name('cart.add');
    Route::post('/cart/remove/{id}', [ShopController::class, 'removeFromCart'])->name('cart.remove');
    Route::post('/cart/update/{id}', [ShopController::class, 'updateCart'])->name('cart.update');
});

// ====================
// DASHBOARD ROUTES
// ====================
Route::get('/dashboard', function () {
    $user = auth()->user();
    
    // ONLY admin@minishop.com can access admin area
    if ($user->email === 'admin@minishop.com') {
        return redirect()->route('admin.dashboard');
    }
    
    // ALL other users go to shop
    return redirect()->route('shop.index');
})->middleware(['auth'])->name('dashboard');

// ====================
// ADMIN ROUTES (PROTECTED with admin middleware)
// ====================
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    // Admin Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    
    // Product Management (CRUD)
    Route::resource('products', ProductController::class);
});

// ====================
// AUTHENTICATION ROUTES
// ====================
require __DIR__.'/auth.php';