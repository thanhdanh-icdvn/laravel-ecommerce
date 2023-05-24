<?php

use App\Http\Controllers\Auth\SocialController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
// All route with prefix /admin
Route::prefix('admin')->group(function () {
    Route::get('/', function () {return view('dashboard');})->middleware(['auth'])->name('admin');
    Route::middleware('auth')->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('posts', PostController::class);
        Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

Route::prefix('auth')->group(function () {
    Route::prefix('{provider}')->group(function () {
        Route::get('/', [SocialController::class, 'redirectToProvider'])->name('login')->where('provider', 'google|facebook|zalo');
        Route::get('callback', [SocialController::class, 'handleProviderCallback'])->where('provider', 'google|facebook|zalo');
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

require __DIR__ . '/auth.php';
