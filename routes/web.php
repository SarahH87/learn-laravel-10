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
//
//Route::get('/vue-attribute-binding', function () {
//    return view('vue-attribute-binding');
//});
//
//Route::get('/lists-conditionals', function () {
//    return view('lists-conditionals');
//});
//
//
//Route::resource('employees', 'EmployeeController')->except([
//    'show',
//]);
//
//Route::inertia('/demo', 'Demo');
