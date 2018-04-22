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

Route::get('/', function () {
    return view('main.welcome');
});


Route::get('/admin', 'DashboardController@index');

Route::get('admin/users', 'UserController@index');

Route::get('admin/resources', 'ResourceController@index');

Route::get('admin/reports/ddl', 'ReportController@index');
Route::get('admin/reports/ga', 'ReportController@gaReport');