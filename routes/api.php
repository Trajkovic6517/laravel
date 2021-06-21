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

Route::get('kategorije', 'App\Http\Controllers\KategorijaController@getAll');
Route::get('kategorije/{id}', 'App\Http\Controllers\KategorijaController@getById');
Route::get('ploce', 'App\Http\Controllers\PlocaController@getAll');
Route::get('ploce/{id}', 'App\Http\Controllers\PlocaController@getById');
Route::post('ploce', 'App\Http\Controllers\PlocaController@save');
Route::delete('ploce/{id}', 'App\Http\Controllers\PlocaController@delete');
