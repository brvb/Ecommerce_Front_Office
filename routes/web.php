<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\LanguageController;

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

Route::get('language/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'pt'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('language.switch');

Route::get('/', [MasterController::class, 'mainPage'])->name('/');


Route::get('/cart', [MasterController::class, 'cartPage'])->name('cart');


Route::get('/product/{id}', [MasterController::class, 'productPage'])->name('product');
Route::get('/product-details/{id}', [MasterController::class, 'productDetails']);

Route::get('/checkout', [MasterController::class, 'checkoutPage'])->name('checkout');

Route::get('/oferta', [MasterController::class, 'ofertaPage'])->name('oferta');

Route::get('/filtro-products', [MasterController::class, 'filtroProductsPage'])->name('filtro-products');

Route::get('/contacto', [MasterController::class, 'contactoPage'])->name('contacto');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',
])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
});
