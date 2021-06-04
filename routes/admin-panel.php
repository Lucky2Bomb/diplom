<?php

use App\Http\Controllers\AdminPanel\AdminPanelController;
use App\Http\Controllers\AdminPanel\UserAndGroupController;
use App\Http\Controllers\News\NewsController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['role:ADMIN|NEWS|GROUPS|USERS-MANAGEMENT|PUBLICATIONS']], function () {
    Route::get('/admin-panel', [AdminPanelController::class, 'index'])->name('admin-panel');
});

Route::group(['middleware' => ['role:ADMIN|USERS-MANAGEMENT']], function () {
    Route::get('/admin-panel/user-and-group', [UserAndGroupController::class, 'index'])->name('admin-panel.user-and-group.index');
    Route::get('/admin-panel/user-and-group/search-people', [UserAndGroupController::class, 'search'])->name('admin-panel.user-and-group.search');
});

Route::get('/news/{type_published?}', [NewsController::class, 'index'])->name('news')->where('type_published', '[A-Za-z]+');
// Route::get('/news/published/{type_published}', [NewsController::class, 'index'])->name('news');

Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');


