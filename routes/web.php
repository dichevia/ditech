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

Route::get('/about', 'HelloController@about');

Route::get('/articles', 'ArticleController@index');
Route::post('/articles', 'ArticleController@store');

Route::get('/categories', 'CategoryController@index');
Route::get('categories/create', 'CategoryController@create');
Route::post('/categories', 'CategoryController@store');
Route::get('/categories/{categoryId}', 'CategoryController@show');
Route::get('/categories/{categoryId}/edit', 'CategoryController@edit');
Route::patch('/categories/{categoryId}', 'CategoryController@update');
Route::delete('/categories/{categoryId}', 'CategoryController@destroy');
