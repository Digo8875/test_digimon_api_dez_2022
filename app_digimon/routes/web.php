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

Route::get('/', [App\Http\Controllers\DigimonController::class, 'index'])->name('digimon_index');

Route::get('/digimons', [App\Http\Controllers\DigimonController::class, 'getDigimons'])->name('get_digimons');

Route::get('/digimons/level/{level}', [App\Http\Controllers\DigimonController::class, 'getDigimonsByLevel'])->name('get_digimons_by_level');

Route::get('/digimon/name/{name}', [App\Http\Controllers\DigimonController::class, 'getDigimonByName'])->name('get_digimon_by_name');
