<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('product/list', [ProductController::class, 'list'])->name('product.list');

Route::get('product/create', [ProductController::class, 'create'])->name('product.create');

Route::post('product/store', [ProductController::class, 'store'])->name('product.store');

Route::get('product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');

Route::post('product/update/{id}', [ProductController::class, 'update'])->name('product.update');

Route::get('product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

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
