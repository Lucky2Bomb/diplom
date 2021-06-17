<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->to(route('news'));
});

Route::get('/dashboard', function () {
    return redirect()->to(route('news'));
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/profile.php';
require __DIR__.'/news.php';
require __DIR__.'/group.php';
require __DIR__.'/complaint.php';
require __DIR__.'/comment.php';
require __DIR__.'/publication.php';
require __DIR__.'/admin-panel.php';
require __DIR__.'/people-search.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
