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

Route::get('/', 'PagesController@index');

Route::get('/hello', function () {
	return "Hello World";
});

Route::get('/login', 'PagesController@login');

Route::get('/contact', 'PagesController@contact');
Route::post('/contactForm', 'PagesController@contactForm');

Route::get('/incident', 'PagesController@incident');
Route::post('/incidentForm', 'PagesController@incidentForm');

Route::get('/problem', 'PagesController@problem');
Route::post('/problemForm', 'PagesController@problemForm');

Route::get('/change', 'PagesController@change');
Route::post('/changeForm', 'PagesController@changeForm');

Route::get('/event_resolve', 'PagesController@event_resolve');
Route::post('/event_resolveForm', 'PagesController@event_resolveForm');

Route::get('/events', 'PagesController@events');
Route::post('/eventForm', 'PagesController@eventForm');

Route::get('/change', 'PagesController@change');
Route::post('/chageForm', 'PagesController@changeForm');

//Auth routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');