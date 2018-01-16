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

Route::get('/','UsersController@loginPage');

Route::get('/help','StaticPagesController@help')->name('help');
Route::get('/about','StaticPagesController@about')->name('about');
Route::get('/home','StaticPagesController@home')->name('home');

Route::get('login','UsersController@loginPage')->name('login');
Route::post('login','UsersController@login')->name('login');
Route::get('logout','UsersController@logout')->name('logout');

Route::resource('/students',StudentsController::class);
Route::resource('/courses',CoursesController::Class);
Route::resource('/lectures',LecturesController::Class);
