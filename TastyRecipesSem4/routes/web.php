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

Route::get('/recipe/{recipe}', 'RecipeController@show');
// Route::post('/recipe/{recipe}', 'RecipeController@store');
// Route::delete('/recipe/{recipe}/{id}', 'RecipeController@destroy');

Route::get('showComment}', 'CommentsController@showComment');
Route::post('storeComment', 'CommentsController@storeComment');
Route::post('deleteComment', 'CommentsController@deleteComment');


//Route::get('/comments','CommentsController@meatballs');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
