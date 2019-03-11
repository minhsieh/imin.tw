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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::group(['prefix' => 'back' , 'middleware' => 'auth'],function(){
    Route::group(['prefix' => 'portfolio'] , function() {
        Route::get('/', 'Back\PortfolioController@index');
        Route::get('/create', 'Back\PortfolioController@create');
        Route::post('/create', 'Back\PortfolioController@store');
    });
});

Route::resource('admin/posts', 'Admin\\PostsController');
Route::resource('admin/portfolio', 'Admin\\PortfolioController');