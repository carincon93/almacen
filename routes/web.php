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
// Route::get('/', 'ambienteController@listambientes');
Route::resource('ambiente','AmbienteController');
// Route::post('search', 'AmbienteController@search');

Route::resource('instructor','InstructorController');
// Route::post('search', 'InstructorController@search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
