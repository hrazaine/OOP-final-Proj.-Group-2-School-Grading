
<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserManagementController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Authenticated User Routes
Route::middleware('auth')->group(function () {

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

    // User Management Routes
    Route::get('/users', [UserManagementController::class, 'index'])
        ->name('user.index');

    Route::get('/users/create', [UserManagementController::class, 'create'])
        ->name('user.create');

    Route::post('/users', [UserManagementController::class, 'store'])
        ->name('user.store');

});

require __DIR__.'/auth.php';
