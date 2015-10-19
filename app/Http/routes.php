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


Route::get('/', 'HomeController@getHome');

Route::get('/home', 'HomeController@getUser');
Route::post('/home', 'HomeController@postUser');

Route::get('/ipsum', 'IpsumController@getIpsum');
Route::post('/ipsum', 'IpsumController@postIpsum');



//Route::get('ipsum', 'IpsumController@getCreate');
//Route::post('ipsum', 'IpsumController@postCreate');

//Route::get('user', 'UserController@getCreate');
//Route::post('user', 'UserController@postCreate');

