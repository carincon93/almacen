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
Route::get('/ajaxsearch', 'ClassroomController@ajaxsearch');
Route::get('/ajaxsearch2', 'InstructorController@ajaxsearch');
// Home
Route::get('/home', 'HomeController@index')->name('home');
// Classroom Loan
Route::get('/classrooms', 'ClassroomController@classrooms');
Route::get('/classroom_loan/{id}', 'ClassroomController@classrooml');
Route::post('/classroom_loan/{id}/loan', 'ClassroomController@classroom_update');
// Classroom Loan - Delivered
Route::get('/classroom_loan2/{id}', 'ClassroomController@classrooml2');
Route::post('/classroom_loan2/{id}/loan', 'ClassroomController@classroom_update2');
// Classroom Loan - Search
Route::post('/classroomajax', 'ClassroomController@classroomajax');
// Historial Loans
Route::post('loan', 'ClassroomController@loan');
Route::post('modify_loan/{borrowed_at}', 'ClassroomController@modify_loan');


// Classroom CRUD
Route::resource('classroom', 'ClassroomController');

Route::resource('instructor','InstructorController');

// redireccion error 404
Route::get('error', function()
{
	return Response::view('error.error404', array(), 404);
});
