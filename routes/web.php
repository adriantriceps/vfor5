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

Route::get('/threads', 'ThreadsController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/threads', 'ThreadsController@index')->name('home');

Route::get('/', 'GreetingsController@hello');
//Route::get('/', 'GreetingsController@index');

Route::get('threads/create', 'ThreadsController@create');
//Route::get('/threads/{id}', 'ThreadsController@show');
Route::get('/threads/four', 'ThreadsController@four');

//Route::get('/threads/{id}', 'ThreadsController@id');
Route::get('/threads/{id}/{count}', 'ThreadsController@id')->where(['id' => '[0-9]+', 'count' => '[0-9]+']);//->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
//Route::get('/threads/{id}', function ($id) {
  //  return 'User '.$id;
//});
