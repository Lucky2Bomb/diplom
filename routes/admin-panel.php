<?php

use App\Http\Controllers\AdminPanel\AdminPanelController;
use App\Http\Controllers\AdminPanel\AdminPanelFacultyController;
use App\Http\Controllers\AdminPanel\AdminPanelSpecialtyController;
use App\Http\Controllers\AdminPanel\AdminPanelUniversityController;
use App\Http\Controllers\AdminPanel\UserAndGroupController;
use App\Http\Controllers\News\NewsController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['role:ADMIN|NEWS|GROUPS|USERS-MANAGEMENT|PUBLICATIONS']], function () {
    Route::get('/admin-panel', [AdminPanelController::class, 'index'])->name('admin-panel');
});

Route::group(['middleware' => ['role:ADMIN|USERS-MANAGEMENT']], function () {
    //section user and group
    Route::get('/admin-panel/user-and-group', [UserAndGroupController::class, 'index'])->name('admin-panel.user-and-group.index');
    Route::post('/admin-panel/user-and-group', [UserAndGroupController::class, 'store'])->name('admin-panel.user-and-group.store');
    Route::get('/admin-panel/user-and-group/search-people', [UserAndGroupController::class, 'search'])->name('admin-panel.user-and-group.search');

    //section university
    Route::get('/admin-panel/university', [AdminPanelUniversityController::class, 'index'])->name('admin-panel.university.index');
    Route::post('/admin-panel/university', [AdminPanelUniversityController::class, 'store'])->name('admin-panel.university.store');
    Route::delete('/admin-panel/university/delete/{name}', [AdminPanelUniversityController::class, 'destroy'])->name('admin-panel.university.destroy');

    //section faculty
    Route::get('/admin-panel/faculty', [AdminPanelFacultyController::class, 'index'])->name('admin-panel.faculty.index');
    Route::post('/admin-panel/faculty', [AdminPanelFacultyController::class, 'store'])->name('admin-panel.faculty.store');
    Route::delete('/admin-panel/faculty/delete/{name}', [AdminPanelFacultyController::class, 'destroy'])->name('admin-panel.faculty.destroy');

    //section specialty
    Route::get('/admin-panel/specialty', [AdminPanelSpecialtyController::class, 'index'])->name('admin-panel.specialty.index');
    Route::post('/admin-panel/specialty', [AdminPanelSpecialtyController::class, 'store'])->name('admin-panel.specialty.store');
    Route::delete('/admin-panel/specialty/delete/{name}', [AdminPanelSpecialtyController::class, 'destroy'])->name('admin-panel.specialty.destroy');
});

Route::get('/news/{type_published?}', [NewsController::class, 'index'])->name('news')->where('type_published', '[A-Za-z]+');
// Route::get('/news/published/{type_published}', [NewsController::class, 'index'])->name('news');

Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');


