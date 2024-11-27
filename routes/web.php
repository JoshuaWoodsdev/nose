<?php
use App\Http\Controllers\UserSettingsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ContextController; 
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
     // Show the edit profile page
     Route::get('/settings/edit', [UserSettingsController::class, 'edit'])->name('user.settings.edit');
     // Route for viewing the user profile
Route::get('userprofile/{id}', [UserProfileController::class, 'show'])->name('userprofile.show');

// Route for editing the user settings
Route::get('user/settings/edit', [UserSettingsController::class, 'edit'])->name('user.settings.edit');

    
     // Handle the profile update request
    Route::put('/settings/update', [UserSettingsController::class, 'update'])->name('user.settings.update');
    Route::put('/dashboard/profile/update', [UserProfileController::class, 'update'])->name('user.update');
    Route::get('/user/{id}', [UserProfileController::class, 'show'])->name('user.profile');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/messages', [MessageController::class, 'index'])->name('messages');
    Route::get('/context', [ContextController::class, 'index'])->name('context');
});

require __DIR__.'/auth.php';
