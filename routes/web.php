<?php

use App\Http\Controllers\Auth\SocialController;
use App\Http\Controllers\PostTaskController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Request;
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
    return view('front.top.index');
})->name('front.top.index');

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

Route::post('upload/post-image', [PostTaskController::class, 'uploadImage'])->name('upload.post.image');

require __DIR__ . '/auth.php';
