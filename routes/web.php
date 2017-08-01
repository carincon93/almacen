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

Auth::routes();

// Welcome
Route::get('/', 'WelcomeController@index')->name('welcome');
Route::post('ajaxsearch', 'WelcomeController@ajaxsearch');
// Home
Route::get('/home', 'HomeController@index')->name('home');
// Classroom Loan
Route::get('/classrooms', 'ClassroomController@classrooms');
Route::get('/classroom_loan/{id}', 'ClassroomController@classrooml');
Route::post('/classroom_loan/{id}/loan', 'ClassroomController@classroom_update');
Route::post('loan', 'ClassroomController@loan');
Route::post('modify_loan/{borrowed_at}', 'ClassroomController@modify_loan');

// Classroom CRUD
Route::resource('classroom', 'ClassroomController');

Route::resource('instructor','InstructorController');
