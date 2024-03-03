<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::get('/home',[HomeController::class, 'index'])
->middleware('auth')->name('home');

Route::resource("/product", ProductController::class)->middleware(['auth','admin']);

Route::get('/shop', function () {
    return view('shop.shop');
})->middleware(['auth', 'verified'])->name('shop');

Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop');

Route::get('admin', [HomeController::class, 'admin'])
  ->middleware(['auth','admin'])->name('admin');

Route::get('/cart', function () {
    return view('shop.cart');
})->middleware(['auth', 'verified'])->name('cart');

Route::get('/contact', function () {
    return view('contact');
})->middleware(['auth', 'verified'])->name('contact');

Route::get('/productdetail', function () {
    return view('shop.productdetail');
})->middleware(['auth', 'verified'])->name('productdetail');

Route::get('/productdetail', [App\Http\Controllers\DetailOrdersController::class, 'index'])->name('productdetail');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';