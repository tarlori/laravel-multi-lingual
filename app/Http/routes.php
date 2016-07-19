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

// set language
App::setLocale(Request::segment(1));

Route::get('/', 'HomeController@index');
Route::post('/contact', 'HomeController@contact');
Route::post('/{lang}/contact', 'HomeController@contact');

Route::get('/about', 'HomeController@about');
Route::get('/{lang}/about', 'HomeController@about');

Route::get('/services', 'HomeController@services');
Route::get('/{lang}/services', 'HomeController@services');

Route::get('/{lang}', 'HomeController@index');
