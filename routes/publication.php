<?php

use App\Http\Controllers\Publication\PublicationCommentController;
use App\Http\Controllers\Publication\PublicationController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth'], function () {
    Route::get('/publications/create', [PublicationController::class, 'create'])->name('publications.create');
    Route::post('/publications/create', [PublicationController::class, 'store'])->name('publications.store');
    Route::get('/publications/{id}/edit', [PublicationController::class, 'edit'])->name('publications.edit');
    Route::post('/publications/{id}/comment/create', [PublicationCommentController::class, 'store'])->name('publication.comment.create');
    Route::patch('/publications/{id}/edit', [PublicationController::class, 'update'])->name('publications.edit.patch');

    Route::get('/timeline', [PublicationController::class, 'indexTimeLine'])->name('timeline.index');
});


Route::group(['middleware' => ['role:ADMIN|PUBLICATIONS']], function () {
    Route::delete('/publications/{id}/edit', [PublicationController::class, 'destroy'])->name('publications.destroy');
});

Route::get('/publications', [PublicationController::class, 'index'])->name('publications');
Route::get('/publications/{id}', [PublicationController::class, 'show'])->name('publications.show');


