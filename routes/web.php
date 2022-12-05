<?php

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


Route::get('/',[\App\Http\Controllers\MainController::class,'index']);
Route::get('/aboutus',[\App\Http\Controllers\MainController::class,'aboutus']);
Route::get('/contactus',[\App\Http\Controllers\MainController::class,'contactus']);
Route::post('/contact_submit',[\App\Http\Controllers\MainController::class,'contact_submit']);
