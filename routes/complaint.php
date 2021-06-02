<?php

use App\Http\Controllers\Publication\PublicationComplaintController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {
    Route::post('/complaint/{publication_id}/create', [PublicationComplaintController::class, 'store'])->name('complaint.store')->where('publication_id', '[0-9]+');
});
