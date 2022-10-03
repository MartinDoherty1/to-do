<?php

use App\Http\Controllers\DBTest;
use App\Http\Controllers\PostController;
use App\Http\Controllers\InsertData;
use App\Http\Controllers\updateTask;
use App\Http\Controllers\ViewAllTasks;
use App\Http\Controllers\deleteTask;
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

Route::get('/',[ViewAllTasks::class, 'AllTasks']);


Route::get('/insert',[InsertData::class,'insertDataForm']);
Route::post('/insert',[InsertData::class,'insertIntoDB']);

Route::get('/viewTasks', [ViewAllTasks::class, 'AllTasks']);

Route::get('edit/{id}',[updateTask::class, 'showTaskToChange']);
Route::post('edit/{id}',[updateTask::class, 'updateTask']);

Route::get('delete/{id}',[deleteTask::class,'deleteTask']);


