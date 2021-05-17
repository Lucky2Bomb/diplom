<?php

use App\Http\Controllers\AdminPanel\AdminPanelController;
use App\Http\Controllers\News\NewsController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['role:ADMIN|NEWS|GROUPS|USERS-MANAGEMENT|PUBLICATIONS']], function () {
    Route::get('/admin-panel', [AdminPanelController::class, 'index'])->name('admin-panel');
    Route::post('/news/create', [NewsController::class, 'store'])->name('news.store');
    Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::patch('/news/{id}/edit', [NewsController::class, 'update'])->name('news.edit.patch');
    Route::delete('/news/{id}/edit', [NewsController::class, 'destroy'])->name('news.destroy');
});

Route::get('/news/{type_published?}', [NewsController::class, 'index'])->name('news')->where('type_published', '[A-Za-z]+');
// Route::get('/news/published/{type_published}', [NewsController::class, 'index'])->name('news');

Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

