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

Route::get('/', 'WelcomeController@index')->name('home');

Route::get('{n}', function($n)
    {
        return Response::make('Je suis la page '. $n. '!', 200);
    }
    )->where('n', '[1-3]')->name('home');

Route::get('article/{n}', 'ArticleController@show')->name('article');

Route::get('facture/{n}', 'FactureController@show')->name('facture');

Route::get('users', 'UserController@getInfos');

Route::post('users', 'UserController@postInfos');

