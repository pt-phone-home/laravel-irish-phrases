<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::post('/search', [PagesController::class, 'search'])->name('search');
Route::get('/random', [PagesController::class, 'random'])->name('random');
Route::get('/random/{id}', [PagesController::class, 'random_by_id'])->name('randomById');
Route::get('/data_dump', [PagesController::class, 'data_dump']);