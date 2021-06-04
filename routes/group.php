<?php

use App\Http\Controllers\Group\GroupController;
use Illuminate\Support\Facades\Route;

Route::get('/group', [GroupController::class, 'index'])->name('group');
Route::get('/group/search', [GroupController::class, 'search'])->name('group.search');

Route::group(['middleware' => ['role:ADMIN|GROUPS']], function () {
    Route::get('/group/create', [GroupController::class, 'create'])->name('group.create');
    Route::post('/group/create', [GroupController::class, 'store'])->name('group.store');
    Route::post('/group/kick', [GroupController::class, 'kick'])->name('group.kick');
    Route::get('/group/{id}/edit', [GroupController::class, 'edit'])->name('group.edit')->where('id', '[0-9]+');
    Route::patch('/group/{id}/edit', [GroupController::class, 'update'])->name('group.edit.patch')->where('id', '[0-9]+');
    Route::delete('/group/{id}', [GroupController::class, 'destroy'])->name('group.destroy')->where('id', '[0-9]+');
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/group/{id}', [GroupController::class, 'show'])->name('group.show')->where('id', '[0-9]+');
    Route::post('/group/{id}/join', [GroupController::class, 'join'])->name('group.join')->where('id', '[0-9]+');
});


// Route::group(['middleware' => ['role:ADMIN|NEWS']], function () {
//     Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
//     Route::patch('/news/{id}/edit', [NewsController::class, 'update'])->name('news.edit.patch');
// });
