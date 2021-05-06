<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'NewsLetterController@index')->name('home');
Route::post('/signup', 'NewsLetterController@signup')->name('signup');
Route::get('/table', 'NewsLetterController@showSignUpsTable')->name('table');

Route::get('/requirments/{challenge}', 'RequirementsController@index');

Route::get('/report/1', 'ReportController@challenge1');
Route::get('/report/2', 'ReportController@challenge2');
Route::get('/report/3', 'ReportController@challenge3');