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
Route::get('/content', 'Content\PostController@index');
Route::get('/content/post', 'Content\PostController@post_index');

Route::post('/content/post/add', 'Content\PostController@store');

//categories
Route::get('/categories', 'Categories\CategoriesController@index');
Route::get('/categories/delete/{id}', 'Categories\CategoriesController@delete');

Route::post('/categories/add', 'Categories\CategoriesController@create');

//API

//-content view page
Route::get('/api/content', 'Api\ApiController@get_content');

//-content view page
Route::get('/api/content/{content}', 'Api\ApiController@get_content_view');