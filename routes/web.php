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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','DashboardController@index');
Route::get('/clublists','ClublistController@index');
Route::get('/fixtures','FixturesController@index');
Route::get('/results','ResultsController@index');
Route::get('/point-tables','PointTableController@index');
Route::get('/sports','SportsController@index');
Route::get('/sports2','Sports2Controller@index');
Route::get('/single-page','SinglePageController@index');
Route::get('/dashboard','DashboardController@dashboard');
Route::resource('/group','GroupController');
Route::resource('/team','TeamController');
