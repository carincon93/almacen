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

// Auth::routes();

// Authentication Routes...
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    // Registration Routes...
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');

    // Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/', 'WelcomeController@index')->name('welcome');

// Welcome Ajaxsearch
Route::get('/findclassroom', 'WelcomeController@ajaxsearch');
Route::get('/documentoinstructorajax', 'InstructorController@documentoajax');

// Prestar Ambiente
Route::post('/solicitar_prestamo/{id}/aprobado', 'ClassroomController@prestamo_aprobado');
Route::post('/disponibilidad_instructor/{idInstructor}', 'InstructorController@disponibilidad_instructor');
Route::post('/modificar_disponibilidad_ins/{idInstructor}', 'InstructorController@modificar_disponibilidad_ins');
// Entregar Ambiente
Route::post('/entregar_ambiente/{id}/aprobado', 'ClassroomController@entrega_aprobado');

Route::post('/save_history_record', 'HistoryRecordController@store');
Route::post('/update_history_record/{prestado_en}', 'HistoryRecordController@update_history_record');

// Instuctor
Route::resource('/admin/instructor', 'InstructorController');
// Classroom
Route::resource('/admin/classroom', 'ClassroomController');
// Classgroup
Route::resource('/admin/class_group', 'ClassGroupController');
// History record
Route::resource('/admin/history_record', 'HistoryRecordController');
// Admin
Route::resource('/admin/admin', 'AdminController');
Route::get('/admin', 'AdminController@prestamos_plano');
Route::get('admin/password', 'AdminController@password');
Route::post('admin/updatepassword', 'AdminController@updatePassword');
// Route::post('admin/modificar_novedad/{id}', 'HistoryRecordController@update');




// Redirección - Error 404
Route::get('error', function()
{
	return Response::view('error.error404', array(), 404);
});
