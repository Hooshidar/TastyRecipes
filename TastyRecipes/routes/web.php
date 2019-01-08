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

Route::get('/', 'PagesController@home');

Route::get('/recipes', 'PagesController@recipes');

Route::get('/calendar', 'PagesController@calendar')->middleware('auth');

Route::get('/about', 'PagesController@about');

Route::get('/recipes/pancakes', 'PagesController@pancakes');
Route::post('/recipes/pancakes', 'PagesController@storePancakes');
Route::delete('/recipes/pancakes/{id}', 'PagesController@destroyPancakes');

Route::get('/recipes/meatballs', 'PagesController@meatballs');
Route::post('/recipes/meatballs', 'PagesController@storeMeatballs');
Route::delete('/recipes/meatballs/{id}', 'PagesController@destroyMeatballs');

//Route::get('/comments','CommentsController@meatballs');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
