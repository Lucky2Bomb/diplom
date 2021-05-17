<?php

use App\Http\Controllers\Profile\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/profile', [ProfileController::class, 'index'])
    ->middleware('auth')
    ->name('profile');

Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show')->where('id', '[0-9]+');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/edit', [ProfileController::class, 'update'])->name('profile.edit.patch')->where('id', '[a-z]+');;
