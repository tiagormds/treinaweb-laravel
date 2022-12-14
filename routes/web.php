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

Route::get('/', \App\Http\Controllers\listarDiariasController::class)->name('index');

Route::get('/diarias/{id}', \App\Http\Controllers\DetalharDIarias::class)->name('detalhes.diarias');

Route::get('/contato', [\App\Http\Controllers\SiteController::class, 'contato']);

Route::get('/sobre', [\App\Http\Controllers\SiteController::class, 'sobre']);




