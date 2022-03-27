<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\tambahcontroller;
use App\Models\Dasboard;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dd', function () {
    return view('welcome');
});
Route::get('/', [DashboardController::class, 'index'])->name('Dashboard.index');


// Product
Route::get('/product', [ProductController::class, 'index'])->name('Product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('Product.create');
Route::post('/product', [ProductController::class, 'store'])->name('Product.store');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('Product.edit');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('Product.update');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('Product.destroy');


// category 
Route::get('/category', [CategoryController::class, 'index'])->name('category.index');


// Order
Route::get('/order', [OrderController::class, 'index'])->name('order.index');
Route::get('/order/create', [OrderController::class, 'create'])->name('order.create');





Route::get('/tambah', function () {
    return view('coba.tambah');
});
Route::post('/tambah', [tambahcontroller::class, 'store'])->name('tambah.store');
