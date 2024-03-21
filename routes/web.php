<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [MasterController::class, 'mainPage'])->name('/');


Route::get('/cart', [MasterController::class, 'cartPage'])->name('cart');

Route::get('/product', [MasterController::class, 'productPage'])->name('product');

Route::get('/checkout', [MasterController::class, 'checkoutPage'])->name('checkout');

Route::get('/filtro-products', [MasterController::class, 'filtroProductsPage'])->name('filtro-products');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',
])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
});
