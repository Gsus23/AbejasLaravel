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

    return view('welcome');
});

Route::name('imprimir')->get('/imprimir-pdf ', 'Controller@imprimir');
Route::get('/reports', 'ReportsController@index');
Route::get('/statistics', 'StatisticsController@index');
Route::get('/estimates', 'EstimateController@index');
Route::get('/analysis', 'AnalysisController@index');
Route::get('/help', 'HelpController@index');
Route::get('/imprimir', 'Controller@imprimir');
Route::name('consultar')->get('/consultar','Controller@consultar');


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('/statistics', 'StatisticsController@store');



