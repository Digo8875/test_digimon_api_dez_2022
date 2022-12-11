<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/digimons', [App\Http\Controllers\DigimonApiController::class, 'getDigimons'])->name('get_digimons');

Route::get('/digimons/level/{level}', [App\Http\Controllers\DigimonApiController::class, 'getDigimonsByLevel'])->name('get_digimons_by_level');

Route::get('/digimon/name/{name}', [App\Http\Controllers\DigimonApiController::class, 'getDigimonByName'])->name('get_digimon_by_name');
