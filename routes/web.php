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
Route::get('/documentoinstructorajax', 'InstructorController@documentoajax');

// Prestar Ambiente
Route::post('/solicitar_prestamo/{id}/aprobado', 'ClassroomController@prestamo_aprobado');
Route::post('/disponibilidad_instructor/{idInstructor}', 'InstructorController@disponibilidad_instructor');
Route::post('/modificar_disponibilidad_ins/{idInstructor}', 'InstructorController@modificar_disponibilidad_ins');
// Entregar Ambiente
Route::post('/entregar_ambiente/{id}/aprobado', 'ClassroomController@entrega_aprobado');

Route::post('/save_historical_record', 'ClassroomController@save_historical_record');
Route::post('/modify_historical_record/{borrowed_at}', 'ClassroomController@modify_historical_record');

// Instuctor
Route::resource('/admin/instructor', 'InstructorController');
// Classroom
Route::resource('/admin/classroom', 'ClassroomController');
//file
Route::resource('/admin/file', 'FileController');
//user
Route::resource('/admin/user', 'UserController');



// Redirección - Error 404
Route::get('error', function()
{
	return Response::view('error.error404', array(), 404);
});
