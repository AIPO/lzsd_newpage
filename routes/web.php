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


Route::get('/about', ['as' => 'about', 'uses' => 'PagesController@getAbout']);
Route::get('/contacts', 'PagesController@getContact');
Route::get('/', 'PagesController@getIndex');
Route::resource('posts', 'PostsController');
Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])
    ->where('slug', '[\w\d\_\-]+');
Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);