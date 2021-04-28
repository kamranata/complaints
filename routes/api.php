<?php

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

Route::post('clients', 'ClientController@store');
Route::get('clients/{client}/complaints', 'ClientController@getComplaints');

Route::post('complaints', 'ComplaintController@store');
Route::post('complaints/{complaint}/status', 'ComplaintController@update_status');
