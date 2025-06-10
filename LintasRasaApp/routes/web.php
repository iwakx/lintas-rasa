<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ExportOrderController;
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

Route::get('/about', function () {
    return view('about');
})->middleware(['auth'])->name('about');

Route::get('/contact', function () {
    return view('contact');
})->middleware(['auth'])->name('contact');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // === Menu ====
    Route::get('/menu', [MenuController::class, 'userIndex'])->name('menu.index');

    // === Cart ====
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/cart/reset', [CartController::class, 'reset'])->name('cart.reset');

    // === Payment ===
    Route::get('/payment/confirm', [PaymentController::class, 'confirm'])->name('payment.confirm');
    Route::get('/payment/qris/{menuId}', [PaymentController::class, 'qrisPage'])->name('payment.qris');
    Route::post('/payment/process', [PaymentController::class, 'process'])->name('payment.process');

    // === Admin Payment ===
    Route::middleware(['admin'])->group(function () {
        Route::get('/admin/orders', [PaymentController::class, 'adminIndex'])->name('admin.orders.index');
        Route::get('/admin/orders/{order}/edit', [PaymentController::class, 'adminEdit'])->name('admin.orders.edit');
        Route::put('/admin/orders/{order}', [PaymentController::class, 'adminUpdate'])->name('admin.orders.update');
    });

    // === Review/Ulasan ===
    Route::get('/menu/reviews', [ReviewController::class, 'index'])->name('reviews.index');
    Route::get('/reviews/{order}/create', [ReviewController::class, 'create'])->name('reviews.create');
    Route::post('/reviews/{order}', [ReviewController::class, 'store'])->name('reviews.store');
});

// === Export To PDF ===
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/orders/export-pdf', [ExportOrderController::class, 'exportPdf'])->name('admin.orders.export-pdf');
});


// Admin only route
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('menus', MenuController::class);
});

require __DIR__.'/auth.php';
