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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('tickets', 'APITicketController@index');
Route::get('tickets/{id}', 'APITicketController@show');
Route::post('tickets', 'APITicketController@store');
Route::put('tickets/{id}', 'APITicketController@update');
Route::delete('tickets/{id}', 'APITicketController@delete');
