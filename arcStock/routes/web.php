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

Auth::routes();

Route::get('/', 'LocationController@index');
Route::get('reports',[
    'as' => 'reports',
    'uses' => 'ReportController@index',
]);
Route::get('reports/{day}', [
    'as' => 'reports.show',
    'uses' => 'ReportController@show',
]);

Route::resource('tools', 'ToolController');
Route::resource('locations', 'LocationController')->except([
    'index',
    'create',
    'edit',
    'show',
    'destroy'
]);
Route::resource('persons', 'PersonController');