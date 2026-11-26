
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
        ->name('users.index');

    Route::get('/users/create', [UserManagementController::class, 'create'])
        ->name('users.create');

    Route::post('/users', [UserManagementController::class, 'store'])
        ->name('users.store');

    Route::get('/users/{id}', [UserManagementController::class, 'show'])
        ->name('users.show');

    Route::get('/users/{id}/edit', [UserManagementController::class, 'edit'])
    ->name('users.edit');

    Route::put('/users/{id}', [UserManagementController::class, 'update'])
    ->name('users.update');

    Route::delete('/users/{id}', [UserManagementController::class, 'destroy'])
    ->name('users.destroy');

});

require __DIR__.'/auth.php';

