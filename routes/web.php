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


Route::group(['middleware' => ['web']], function () {

    Route::get('/join', function () {
        return view('login');
    })->name('join');
    Route::post('/join', [
        'uses' =>'UserController@postsingUp',
        'as' => 'join'
    ]);
    Route::post('/login', [
        'uses' =>'UserController@singIn',
        'as' => 'login'
    ]);
    Route::get('/',[
       'uses'=> 'HomeController@index',
       'as' =>'home'
    //    'middleware' =>'auth'

    ]);
    Route::post('/createPost',[
        'uses' => 'PostController@postCreatePost',
        'as' => 'createPost'
    ]);
});


