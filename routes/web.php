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
Route::get('/admin/historical', 'AdminController@historial_prestamos');




// Welcome Ajaxsearch
Route::get('/findclassroom', 'WelcomeController@ajaxsearch');
Route::get('/documentoinstructorajax', 'WelcomeController@documentoajax');



// Prestar Ambiente
Route::post('/solicitar_prestamo/{id}/aprobado', 'ClassroomController@prestamo_aprobado');
// Entregar Ambiente
Route::post('/entregar_ambiente/{id}/aprobado', 'ClassroomController@entrega_aprobado');

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
