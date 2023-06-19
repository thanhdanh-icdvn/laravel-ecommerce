<?php
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

// All route with prefix /admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard.index');
    })
        ->middleware(['auth', 'verified'])
        ->name('dashboard');
    Route::middleware('auth')->group(function () {
        Route::resource('users', UserController::class);
        Route::resource('posts', PostController::class);
        Route::resource('components', ComponentController::class);
        Route::get('profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

require __DIR__ . '/auth.php';
