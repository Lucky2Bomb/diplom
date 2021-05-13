<?php

use App\Http\Controllers\Group\GroupController;
use Illuminate\Support\Facades\Route;

Route::get('/group', [GroupController::class, 'index'])->name('group');
Route::get('/group/{id}', [GroupController::class, 'show'])->name('group.show');

// Route::group(['middleware' => ['role:ADMIN|NEWS']], function () {
//     Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
//     Route::patch('/news/{id}/edit', [NewsController::class, 'update'])->name('news.edit.patch');
// });

