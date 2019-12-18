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

Route::get('about', 'AboutController@index');

Route::get('todos', 'TodosController@index');

Route::get('todos/{todo}','TodosController@show');

Route::get('new-todos','TodosController@create');

Route::post('/store-todos','TodosController@store');

<<<<<<< HEAD
Route::get('todos/{todo}/edit', 'TodosController@edit');

Route::get('todos/{todo}/delete', 'TodosController@delete');

Route::post('todos/{todo}/update-todos','TodosController@update');
=======
Route::get('todos/{todo}/delete', 'TodosController@delete');
>>>>>>> e47a2dc3b17d4df9ad45ab8c7f183afcc2c31dc1
