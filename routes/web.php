<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('paginas.pagina-main', ['main' => 'main']);
})->name('/'); 

Route::get('/product', function () {
    return view('paginas.pagina-product', ['main' => 'main']);
})->name('product'); 

Route::get('/checkout', function () {
    return view('paginas.pagina-checkout', ['main' => 'main']);
})->name('checkout'); 

Route::get('/filtro-products', function () {
    return view('paginas.pagina-filtro-products', ['main' => 'main']);
})->name('filtro-products');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',
])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
});
