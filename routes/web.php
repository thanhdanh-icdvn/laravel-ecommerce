<?php

use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\SocialController;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Admin\OrderList;
use App\Http\Livewire\Admin\OrderManager;
use App\Http\Livewire\Admin\ProductCreator;
use App\Http\Livewire\Admin\ProductList;
use App\Http\Livewire\Admin\ProductManager;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('auth')->group(function(){
    Route::prefix('google')->group(function(){
        Route::get('/',[SocialController::class,'googleRedirect']);
        Route::get('callback',[SocialController::class,'handleGoogleLoginCallback']);
    });
    Route::prefix('facebook')->group(function(){
        Route::get('/',[SocialController::class,'facebookRedirect']);
        Route::get('callback',[SocialController::class,'handleFacebookLoginCallback']);
    });
    Route::prefix('zalo')->group(function(){
        Route::get('/',[SocialController::class,'zaloRedirect']);
        Route::get('callback',[SocialController::class,'handleZaloLoginCallback']);
    });
});


Route::get('email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::post('email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::middleware('auth')->group(function () {
    Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('products', ProductList::class)->name('products.index');
    Route::get('products/create', ProductCreator::class)->name('products.create');
    Route::get('products/{product}', ProductManager::class)->name('products.edit');
    Route::get('orders', OrderList::class)->name('orders.index');
    Route::get('orders/{order}', OrderManager::class)->name('orders.show');
});



require __DIR__.'/auth.php';
