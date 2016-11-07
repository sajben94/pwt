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

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
  echo "string";
});

Route::get('show/{id}',[
  'as' => 'show', 'uses' => 'UserController@showAction'
]);

Route::post('insert',[
  'as' => 'insert', 'uses' => 'UserController@insertAction'
]);

Route::get('add',[
  'as' => 'add', 'uses' => 'UserController@getUserForm'
]);

Route::post('update/{id}',[
  'as' => 'update', 'uses' => 'UserController@updateAction'
]);

Route::get('delete/{id}',[
  'as' => 'delete', 'uses' => 'UserController@deleteAction'
]);

Route::get('showall',[
  'as' => 'showall', 'uses' => 'UserController@showAllAction'
]);
