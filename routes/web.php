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

Route::get('/{project}/new', 'ContentController@create')
    ->middleware('can:see-project,project')
    ->name('content.new');

Route::get('/{project}', 'ProjectController@index')
    ->middleware('can:see-project,project')
    ->name('project.index');Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

