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
//Route::get('pytania-abc', 'QuestionController@abc');
//Route::get('pytania-tak-nie', 'QuestionController@yesno');

Route::get('/pojedynczePytanie', 'QuestionController@showQuestions');
Route::get('/dodajPytanie', 'QuestionController@addQuestion');
Route::get('/dodajPytanieMulti', 'QuestionController@multi');
Route::get('/dodajPytanieTakNie', 'QuestionController@yesno');

Route::get('admin/logowanie', 'Admin\AuthController@getLogin');
Route::post('admin/logowanie', 'Admin\AuthController@postLogin');
Route::get('admin/rejestracja', 'Admin\AuthController@getRegister');
Route::post('admin/rejestracja', 'Admin\AuthController@postRegister');
Route::get('admin/wyloguj', 'Admin\AuthController@getLogout');
