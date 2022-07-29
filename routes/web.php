<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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


Route::get('/contact', [ContactController::class,'create']);
Route::post('/create' , [ContactController::class, 'store']);
Route::get('/view', [ContactController::class, 'index']);
Route::get('/edit/{id}', [ContactController::class, 'show']);
Route::post('edit/{id}',[ContactController::class,'edit']);
Route::get('delete/{id}',[ContactController::class,'destroy']);
Route::post('delete/{id}',[ContactaController::class,'show']);
