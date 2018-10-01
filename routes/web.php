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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/movies', 'MovieController@index');
Route::get('/movies/{id}', 'MovieController@show');

Route::get('/actors/add-actor', 'ActorsController@addActor');
Route::get('/actors', 'ActorsController@index');
Route::get('/actors/{id}', 'ActorsController@show');
