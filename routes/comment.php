<?php

use App\Http\Controllers\Publication\PublicationCommentController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'auth'], function () {
    //id - publication id
    Route::post('/comment/{id}/create', [PublicationCommentController::class, 'store'])->name('comment.create')->where('id', '[0-9]+');
});

Route::group(['middleware' => ['role:ADMIN|PUBLICATIONS']], function () {
    //id - comment id
    Route::delete('/comment/{id}', [PublicationCommentController::class, 'destroy'])->name('comment.destroy')->where('id', '[0-9]+');
});
