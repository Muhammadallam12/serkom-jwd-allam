<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PesanController;
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

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/chart', [HomeController::class, 'chart'])->name('chart');
Route::get('/pesan', [HomeController::class, 'pesan']);
Route::post('/pesan', [PesanController::class, 'store'])->name('pesan');
Route::get('/harga', [HomeController::class, 'harga']);
Route::get('/kumpe', [HomeController::class, 'kumpe']);
Route::get('/maskem', [HomeController::class, 'maskem']);
Route::get('/bukit', [HomeController::class, 'bukit']);
