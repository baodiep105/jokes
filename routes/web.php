<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/',[\App\Http\Controllers\JokeController::class,'getJoke']);
Route::post('/vote',[\App\Http\Controllers\JokeController::class,'vote']);
// Route::get('/vote/{id}',[\App\Http\Controllers\JokeController::class,'addCookie']);

