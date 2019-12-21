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

Route::get('/', 'MainController@index');

Route::get('/login', 'MainController@login');


Route::resource('data', 'DataController')->middleware('auth');

Route::get('visit/{id}', 'VisitController@index')->middleware('auth');
Route::get('visit/create/{id}', 'VisitController@create')->middleware('auth');

Route::post('visit', 'VisitController@store')->middleware('auth');

Auth::routes();
