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

//users 
Route::get('/users', 'Users\AdminController@index');

//content
Route::get('/content/post', 'Content\PostController@index');

//categories
Route::get('/categories', 'Categories\CategoriesController@index');
Route::post('/categories/add', 'Categories\CategoriesController@create');

