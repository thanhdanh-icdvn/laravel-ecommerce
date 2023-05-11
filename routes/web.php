<?php

use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Admin\OrderList;
use App\Http\Livewire\Admin\OrderManager;
use App\Http\Livewire\Admin\ProductCreator;
use App\Http\Livewire\Admin\ProductList;
use App\Http\Livewire\Admin\ProductManager;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('products', ProductList::class)->name('products.index');
    Route::get('products/create', ProductCreator::class)->name('products.create');
    Route::get('products/{product}', ProductManager::class)->name('products.edit');
    Route::get('orders', OrderList::class)->name('orders.index');
    Route::get('orders/{order}', OrderManager::class)->name('orders.show');

});



require __DIR__.'/auth.php';
