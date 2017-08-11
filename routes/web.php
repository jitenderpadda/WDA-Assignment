<?php

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

Route::get('/', function () {return view('home');});
Route::get('home', function () {return view('home');});
Route::get('raise_ticket',
    ['as' => 'raise_ticket', 'uses' => 'RaiseTicketController@create']);
Route::post('raise_ticket',
    ['as' => 'raise_ticket_store', 'uses' => 'RaiseTicketController@store']);
Route::get('faq', function () {return view('faq');});
Route::get('track-progress',
    ['as' => 'track-progress', 'uses' => 'TrackProgressController@create']);
Route::post('track-progress',
    ['as' => 'track-progress-store', 'uses' => 'TrackProgressController@store']);
Route::get('tickets', function () {return view('tickets');});
