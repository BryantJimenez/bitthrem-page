<?php

use Illuminate\Support\Facades\Route;

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

/////////////////////////////////////// AUTH ////////////////////////////////////////////////////

Auth::routes(['register' => false]);
Route::get('/usuarios/email', 'AdminController@emailVerifyAdmin');

/////////////////////////////////////////////// WEB ////////////////////////////////////////////////
Route::get('/', 'WebController@index')->name('home');

Route::group(['middleware' => ['auth', 'admin']], function () {
	/////////////////////////////////////// ADMIN ///////////////////////////////////////////////////

	// Inicio
	Route::get('/admin', 'AdminController@index')->name('admin');
	Route::get('/admin/perfil', 'AdminController@profile')->name('profile');
	Route::get('/admin/perfil/editar', 'AdminController@profileEdit')->name('profile.edit');
	Route::put('/admin/perfil/', 'AdminController@profileUpdate')->name('profile.update');

	// Usuarios
	Route::get('/admin/usuarios', 'UserController@index')->name('usuarios.index')->middleware('permission:users.index');
	Route::get('/admin/usuarios/registrar', 'UserController@create')->name('usuarios.create')->middleware('permission:users.create');
	Route::post('/admin/usuarios', 'UserController@store')->name('usuarios.store')->middleware('permission:users.create');
	Route::get('/admin/usuarios/{user:slug}', 'UserController@show')->name('usuarios.show')->middleware('permission:users.show');
	Route::get('/admin/usuarios/{user:slug}/editar', 'UserController@edit')->name('usuarios.edit')->middleware('permission:users.edit');
	Route::put('/admin/usuarios/{user:slug}', 'UserController@update')->name('usuarios.update')->middleware('permission:users.edit');
	Route::delete('/admin/usuarios/{user:slug}', 'UserController@destroy')->name('usuarios.delete')->middleware('permission:users.delete');
	Route::put('/admin/usuarios/{user:slug}/activar', 'UserController@activate')->name('usuarios.activate')->middleware('permission:users.active');
	Route::put('/admin/usuarios/{user:slug}/desactivar', 'UserController@deactivate')->name('usuarios.deactivate')->middleware('permission:users.deactive');

	// Preguntas
	Route::get('/admin/preguntas', 'QuestionController@index')->name('preguntas.index')->middleware('permission:questions.index');
	Route::get('/admin/preguntas/registrar', 'QuestionController@create')->name('preguntas.create')->middleware('permission:questions.create');
	Route::post('/admin/preguntas', 'QuestionController@store')->name('preguntas.store')->middleware('permission:questions.create');
	Route::get('/admin/preguntas/{question:slug}/editar', 'QuestionController@edit')->name('preguntas.edit')->middleware('permission:questions.edit');
	Route::put('/admin/preguntas/{question:slug}', 'QuestionController@update')->name('preguntas.update')->middleware('permission:questions.edit');
	Route::delete('/admin/preguntas/{question:slug}', 'QuestionController@destroy')->name('preguntas.delete')->middleware('permission:questions.delete');
	Route::put('/admin/preguntas/{question:slug}/activar', 'QuestionController@activate')->name('preguntas.activate')->middleware('permission:questions.active');
	Route::put('/admin/preguntas/{question:slug}/desactivar', 'QuestionController@deactivate')->name('preguntas.deactivate')->middleware('permission:questions.deactive');

	// Ajustes
	Route::get('/admin/ajustes', 'SettingController@edit')->name('ajustes.edit')->middleware('permission:settings.edit');
	Route::put('/admin/ajustes', 'SettingController@update')->name('ajustes.update')->middleware('permission:settings.edit');
});