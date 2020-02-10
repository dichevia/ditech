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

Route::get('/', 'WelcomeController@index');


Route::get('/articles', 'ArticleController@index');
Route::get('/articles/create', 'ArticleController@create');
Route::post('/articles', 'ArticleController@store');
Route::get('/articles/{articledId}', 'ArticleController@show');
Route::get('/articles/{articleId}/edit', 'ArticleController@edit');
Route::patch('/articles/{articleId}', 'ArticleController@update');
Route::delete('/articles/{articleId}', 'ArticleController@destroy');

Route::get('/categories', 'CategoryController@index');
Route::get('categories/create', 'CategoryController@create');
Route::post('/categories', 'CategoryController@store');
Route::get('/categories/{categoryId}', 'CategoryController@show');
Route::get('/categories/{categoryId}/edit', 'CategoryController@edit');
Route::patch('/categories/{categoryId}', 'CategoryController@update');
Route::delete('/categories/{categoryId}', 'CategoryController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
