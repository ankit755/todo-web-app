<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

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

Route::get('/',[TodosController::class, 'index']);
Route::get('/create',[TodosController::class, 'create']);
Route::get('/todo/{id}',[TodosController::class, 'show']);
Route::get('/todo/{id}/edit',[TodosController::class, 'edit']);
Route::put('/todo/{id}',[TodosController::class, 'update']);
//Route::get('/todo/{id}/delete',[TodosController::class, 'destroy']);
Route::post('/store', [TodosController::class, 'store']);



Route::resource('todo','TodosController::class');