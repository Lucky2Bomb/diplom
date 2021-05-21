<?php

use App\Http\Controllers\Profile\ProfileController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', [ProfileController::class, 'index'])
        ->middleware('auth')
        ->name('profile');
    Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show')->where('id', '[0-9]+');
    Route::get('/profile/{id}/subscribe', [ProfileController::class, 'subscribe'])->name('profile.subscribe')->where('id', '[0-9]+');
    Route::get('/profile/{id}/unsubscribe', [ProfileController::class, 'unsubscribe'])->name('profile.unsubscribe')->where('id', '[0-9]+');
    Route::get('/profile/notifications-check', [ProfileController::class, 'notifications_check'])->name('profile.notifications-check');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/edit', [ProfileController::class, 'update'])->name('profile.edit.patch')->where('id', '[a-z]+');;
});
