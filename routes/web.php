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

Route::get('/total', [App\Http\Controllers\orderController::class, 'index']);
Route::get('/', [App\Http\Controllers\orderController::class, 'choice']);
Route::get('/abc/{id}', [App\Http\Controllers\orderController::class, 'create']);
Route::post('/abc/{id}', [App\Http\Controllers\orderController::class, 'store']);
Route::get('/delete/{id}', [App\Http\Controllers\orderController::class, 'delete']);





Route::get('/foods/create', [App\Http\Controllers\foodController::class, 'create']);
Route::post('/foods/create', [App\Http\Controllers\foodController::class, 'store']);
Route::get('/foods/update/{id}', [App\Http\Controllers\foodController::class, 'edit']);
Route::post('/foods/update/{id}', [App\Http\Controllers\foodController::class, 'update']);
Route::get('/foods/delete/{id}', [App\Http\Controllers\foodController::class, 'delete']);
Route::get('/foods', [App\Http\Controllers\foodController::class, 'index']);