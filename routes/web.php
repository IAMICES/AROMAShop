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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', App\http\livewire\HomeComponent::class)->name('home.index');

Route::get('/shop', App\http\livewire\ShopComponent::class)->name('shop');

Route::get('/cart', App\http\livewire\CartComponent::class)->name('shop.cart');

Route::get('/checkout', App\http\livewire\CheckoutComponent::class)->name('shop.checkout');

Route::get('/login', App\http\livewire\CheckoutComponent::class)->name('shop.checkout');
