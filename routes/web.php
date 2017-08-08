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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/admin', 'AdminController@index')->name('admin');

// Welcome Ajaxsearch
Route::get('/findclassroom', 'WelcomeController@ajaxsearch');

// Prestar Ambiente
Route::get('/classroom_request/{id}', 'ClassroomController@request');
Route::post('/classroom_request/{id}/approved', 'ClassroomController@request_approved');
// Entregar Ambiente
Route::get('/classroom_delivery/{id}', 'ClassroomController@delivery');
Route::post('/classroom_delivery/{id}/approved', 'ClassroomController@delivery_approved');

Route::post('/save_historical_record', 'ClassroomController@save_historical_record');
Route::post('/modify_historical_record/{borrowed_at}', 'ClassroomController@modify_historical_record');

// Instuctor
Route::resource('/admin/instructor', 'InstructorController');
// Ajax Instructor
Route::get('/findinstructor', 'InstructorController@ajaxsearch');


// Classroom
Route::resource('/admin/classroom', 'ClassroomController');
// Ajax Classroom
Route::get('/findclassroomtbl', 'ClassroomController@ajaxsearch');


// Redirección - Error 404
Route::get('error', function()
{
	return Response::view('error.error404', array(), 404);
});
