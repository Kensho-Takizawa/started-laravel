<?php

use App\Http\Controllers\TaskDestroyController;
use App\Http\Controllers\TaskIndexController;
use App\Http\Controllers\TaskStoreController;
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

Route::get('/', TaskIndexController::class);

Route::post('/task', TaskStoreController::class);

Route::delete('/task/{task}', TaskDestroyController::class);
