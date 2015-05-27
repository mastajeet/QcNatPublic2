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
Route::get('/accueil', 'PagesController@index');

Route::get('/formation/', 'PagesController@formation');
Route::get('/prescolaire/', 'PagesController@prescolaire');
Route::get('/cours/{slug}/', 'PagesController@contenu');

Route::get('/junior/', 'PagesController@junior');
Route::get('/adulte/', 'PagesController@adulte');

Route::get('/raisons/', 'PagesController@raisons');
Route::get('/procedure/', 'PagesController@procedure');


