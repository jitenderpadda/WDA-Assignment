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

Route::get('comments/{ticketId}', 'APICommentController@index');
//Route::get('comments/{id}', 'APICommentController@show');
Route::post('comments', 'APICommentController@store');
//Route::put('comments/{id}', 'APICommentController@update');
//Route::delete('comments/{id}', 'APICommentController@delete');

