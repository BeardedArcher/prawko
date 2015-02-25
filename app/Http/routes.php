<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');

Route::get('pytania-abc', 'QuestionController@abc');
Route::get('pytania-tak-nie', 'QuestionController@yesno');

Route::get('pytanie', 'QuestionController@questionDetails');

Route::get('dodaj-pytanie-tak-nie', 'QuestionController@addYesno');
Route::post('dodaj-pytanie-tak-nie', 'QuestionController@uploadYesNo'); // upload yn
Route::get('dodaj-pytanie-abc', 'QuestionController@addAbc');
Route::post('dodaj-pytanie-abc', 'QuestionController@uploadQuestion'); // upload abc

Route::get('admin/', 'Admin\AdminController@index');
Route::get('admin/logowanie', 'Admin\AuthController@getLogin');
Route::post('admin/logowanie', 'Admin\AuthController@postLogin');
Route::get('admin/rejestracja', 'Admin\AuthController@getRegister');
Route::post('admin/rejestracja', 'Admin\AuthController@postRegister');
Route::get('admin/wyloguj', 'Admin\AuthController@getLogout');
