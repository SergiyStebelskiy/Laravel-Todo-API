<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::get('tasks', 'Tasks\TasksController@tasks');
Route::get('tasks/{id}', 'Tasks\TasksController@taskById');
Route::post('tasks', 'Tasks\TasksController@createTask');
Route::put('tasks/{task}', 'Tasks\TasksController@editTask');
Route::delete('tasks/{task}', 'Tasks\TasksController@deleteTask');