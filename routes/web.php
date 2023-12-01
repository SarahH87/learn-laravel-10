<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\MainController::class, 'home']);

Route::get('/conditionals', [\App\Http\Controllers\MainController::class, 'conditionals']);

Route::post('/add-item', [\App\Http\Controllers\MainController::class, 'addItem']);

