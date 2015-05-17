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


Route::resource('articles', 'ArticleController');
//Route::get('/articles', ['as' => 'articles.index', 'uses' => 'ArticleController@index']);
//Route::get('/articles/{id}', ['as' => 'articles.show', 'uses' => 'ArticleController@show'])
//    ->where('id', '[0-9]+');
//Route::get('/articles/create', ['as' => 'articles.create', 'uses' => 'ArticleController@create']);
//Route::post('/articles', ['as' => 'articles.store', 'uses' => 'ArticleController@store']);
//Route::get('/articles/edit', ['as' => 'articles.edit', 'uses' => 'ArticleController@create']);

Route::post('/comments', ['as' => 'comments.store', 'uses' => 'CommentController@store']);

Route::controllers(
    [
        'auth'     => 'Auth\AuthController',
        'password' => 'Auth\PasswordController',
    ]
);

Route::get('home', 'HomeController@index');

