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

Route::resource('groups', 'GroupController');

Route::get('group/{group}/create', 'TaskController@create')->name('tasks.create');
Route::post('group/{group}/tasks', 'TaskController@store')->name('tasks.store');
Route::get('group/{group}', 'TaskController@index')->name('tasks.show');

Route::get('group/task/{task}', 'TaskController@show');

Route::get('group/{group}/{task}', 'AnswerController@index');
Route::get('group/{group}/{task}/create', 'AnswerController@create')->name('answers.create');
Route::post('group/{group}/{task}/answer', 'AnswerController@store')->name('answers.store');