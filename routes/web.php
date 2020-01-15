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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@index');

Route::get('/login', 'MainController@login');


Route::resource('data', 'DataController')->middleware('auth');

Route::get('visit/{id}/{deserve}', 'VisitController@index')->middleware('auth');
Route::get('visit/create/{id}', 'VisitController@create')->middleware('auth');

Route::post('visit', 'VisitController@store')->middleware('auth');

Auth::routes();

Route::get('import', 'DataController@import')->name('import')->middleware('auth');

Route::post('import', 'DataController@importExcel')->name('importExcel')->middleware('auth');

Route::get('visitedit/{id}/{deserve}', 'VisitController@edit')->name('showVisitEdit')->middleware('auth');

Route::post('visit/update', 'VisitController@update')->name('visitUpdate')->middleware('auth');


Route::get('family/visualize', 'DataController@visualize')->name('FamilyVisualize')->middleware('auth');
Route::get('visualize', 'DataController@showVisualize')->name('visualize')->middleware('auth');


Route::post('deservestate', 'DataController@deserve')->name('deserveState')->middleware('auth');




