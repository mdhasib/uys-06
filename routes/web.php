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
Route::get('/clublist','ClublistController@index');
Route::get('/fixtures','FixturesController@index');
Route::get('/results','ResultsController@index');
Route::get('/point-table','PointTableController@index');
