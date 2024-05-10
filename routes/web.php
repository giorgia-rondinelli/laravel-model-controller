<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PageController::class, 'index'])->name('home');

Route::get('/film', [PageController::class, 'films'])->name('films');
Route::get('/best-films', [PageController::class, 'bestfilms'])->name('best-films');

// la rotta dettaglio riceve dinamicamente l'id del film
Route::get('/details/{id}', [PageController::class, 'movieDetail'])->name('movieDetail');



