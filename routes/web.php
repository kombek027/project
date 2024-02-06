<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserConroller;
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
    return view('products.index');
});

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');

Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/delete/{product}', [ProductController::class, 'delete'])->name('product.delete');

Route::post('/product/{product}', [ProductController::class, 'update'])->name('product.update');

Route::get('/user/{id}', [UserConroller::class, 'index'])->name('show_user_name');

