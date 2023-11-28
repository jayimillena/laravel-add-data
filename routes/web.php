<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NameController;

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

Route::get('/', [NameController::class, 'index'])->name('home');
Route::post('/save', [NameController::class, 'store'])->name('store');
Route::get('/show', [NameController::class, 'show'])->name('show');
