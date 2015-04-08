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

Route::get('bastard', 'BastardController@bastard');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('about','PagesController@about');
Route::get('generic','PagesController@generic');
Route::get('tool','PagesController@tool');
Route::get('contact','PagesController@contact');
Route::get('shred','PagesController@shred');
Route::get('lyric','LyricController@index');


/*
|
| SONGS
|
*/

Route::get('songs','SongController@index');
Route::get('songs/create','SongController@create');
Route::post('songs','SongController@store');
Route::get('song/{id}','SongController@show');




/*
|
| COMPOSERS
|
*/



/*
|
| LYRICS
|
*/


/*
|
| RECORDINGS
|
*/