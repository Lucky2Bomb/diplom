<?php

use App\Http\Controllers\PeopleSearch\PeopleSearchController;
use Illuminate\Support\Facades\Route;

Route::get('/people-search',        [PeopleSearchController::class, 'index'])->name('people-search.index');
Route::get('/people-search/search', [PeopleSearchController::class, 'search'])->name('people-search.search');
