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

Route::get('/admin', function(){
    return view('/auth/login');
});

Route::get('/singleQuestion', function(){
    return view('singleQuestion');
});

Route::get('/addQuestionPanel', function(){
    return view('addQuestionPanel');
});

Route::get('/addMultiQuestion', function(){
    return view('addMultiQuestion');
});

Route::get('/addYesNoQuestion', function(){
    return view('addYesNoQuestion');
});

//Route::get('home', 'HomeController@index');
Route::get('pytania-abc', 'QuestionController@abc');
Route::get('pytania-tak-nie', 'QuestionController@yesno');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
