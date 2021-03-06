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

Route::get('/',
    ['as' => '/', 'uses' => 'PagesController@home']);

Route::get('home',
    ['as' => 'home', 'uses' => 'PagesController@home']);

Route::get('raiseTicket',
    ['as' => 'raiseTicket', 'uses' => 'RaiseTicketController@create']);

Route::post('raiseTicket',
    ['as' => 'raiseTicket_store', 'uses' => 'RaiseTicketController@store']);

Route::get('faq',
    ['as' => 'faq', 'uses' => 'PagesController@faq']);

Route::post('login',
    ['as' => 'login', 'uses' => 'HomeController@login']);

Route::get('logout',
   ['as' => 'logout', 'uses' => 'PagesController@logout']);

Route::resource('viewTickets','ViewTicketController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
