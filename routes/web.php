<?php

use App\Http\Livewire\AdminCategory;
use App\Http\Livewire\AdminDashboard;
use App\Http\Livewire\AdminProdectEdit;
use App\Http\Livewire\AdminProduct;
use App\Http\Livewire\AdminProductCreate;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum','verified', 'is_admin'])->group(function(){

    Route::get('admin/dashboard', AdminDashboard::class)->name('dashboard.admin');
    Route::get('admin/products', AdminProduct::class)->name('products.admin');
    Route::get('admin/product-create', AdminProductCreate::class)->name('products.create');
    Route::get('admin/product-edit/{id}', AdminProdectEdit::class)->name('products.edit');


    Route::get('admin/category', AdminCategory::class)->name('category.admin');

});
