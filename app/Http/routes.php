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

Route::get('/', ['as' => 'homepage', 'uses' => 'WelcomeController@index']);
Route::get('/about', ['as' => 'about', 'uses' => 'PagesController@about']);
Route::get('/contact', ['as' => 'contact', 'uses' => 'PagesController@contact']);
Route::get('/articles', ['as' => 'articles', 'uses' => 'ArticleController@index']);
Route::get('/article/{id}', ['as' => 'article', 'uses' => 'ArticleController@article'])
    ->where('id', '[0-9]+');

Route::post('/save/{id}', ['as' => 'save', 'uses' => 'WelcomeController@save'])
    ->where('id', '[0-9]+');


Route::get('home', 'HomeController@index');

Route::controllers([
        'auth' => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]);
