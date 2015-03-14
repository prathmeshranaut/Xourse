<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('login', ['as' => 'login', 'uses' => 'UserController@login']);
Route::get('signup', ['as' => 'signup', 'uses' => 'UserController@create']);
Route::post('signup', ['as' => 'signup-create', 'uses' => 'UserController@signup']);
Route::get('logout', ['as' => 'logout', 'uses' => 'UserController@destroy']);
Route::post('search', ['as' => 'search', 'uses' => 'CourseController@search']);
Route::get('course/join/{course_id}', ['as' => 'join-course', 'uses' => 'CourseController@join']);
Route::post('course/{id}/rate', ['as' => 'rate-course', 'uses' => 'CourseController@rate']);

Route::resource('user', 'UserController');
Route::resource('course', 'CourseController');
Route::resource('video', 'VideoController');