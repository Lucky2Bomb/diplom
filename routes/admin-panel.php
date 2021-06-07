<?php

use App\Http\Controllers\AdminPanel\AdminPanelAllNewsController;
use App\Http\Controllers\AdminPanel\AdminPanelController;
use App\Http\Controllers\AdminPanel\AdminPanelFacultyController;
use App\Http\Controllers\AdminPanel\AdminPanelPublicationComplaintsController;
use App\Http\Controllers\AdminPanel\AdminPanelPublicationsController;
use App\Http\Controllers\AdminPanel\AdminPanelSpecialtyController;
use App\Http\Controllers\AdminPanel\AdminPanelUniversityController;
use App\Http\Controllers\AdminPanel\UserAndGroupController;
use App\Http\Controllers\News\NewsController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['role:ADMIN|NEWS|GROUPS|USERS-MANAGEMENT|PUBLICATIONS']], function () {
    Route::get('/admin-panel', [AdminPanelController::class, 'index'])->name('admin-panel');
});



Route::group(['middleware' => ['role:ADMIN|GROUPS']], function () {
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



Route::group(['middleware' => ['role:ADMIN|NEWS']], function () {
    //section all news
    Route::get('/admin-panel/news', [AdminPanelAllNewsController::class, 'index'])->name('admin-panel.news.index');
    Route::delete('/admin-panel/news/delete/{id}', [AdminPanelAllNewsController::class, 'destroy'])->name('admin-panel.news.destroy')->where('id', '[0-9]+');
});



Route::group(['middleware' => ['role:ADMIN|PUBLICATIONS']], function () {
    //section all news
    Route::get('/admin-panel/publications', [AdminPanelPublicationsController::class, 'index'])->name('admin-panel.publications.index');
    Route::delete('/admin-panel/publications/delete/{id}', [AdminPanelPublicationsController::class, 'destroy'])->name('admin-panel.publications.destroy')->where('id', '[0-9]+');

    Route::get('/admin-panel/publication-complaints', [AdminPanelPublicationComplaintsController::class, 'index'])->name('admin-panel.publication-complaints.index');
    Route::get('/admin-panel/publication-complaints-not-checked', [AdminPanelPublicationComplaintsController::class, 'index_not_checked'])->name('admin-panel.publication-complaints.not-checked');
    Route::get('/admin-panel/publication-complaints/check', [AdminPanelPublicationComplaintsController::class, 'check'])->name('admin-panel.publication-complaints.check');
});

Route::get('/news/{type_published?}', [NewsController::class, 'index'])->name('news')->where('type_published', '[A-Za-z]+');
// Route::get('/news/published/{type_published}', [NewsController::class, 'index'])->name('news');

Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');


