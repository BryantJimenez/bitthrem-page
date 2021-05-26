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
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
	Route::get('/', 'WebController@index')->name('home');
	Route::get(LaravelLocalization::transRoute('routes.web.about'), 'WebController@about')->name('web.about');
	Route::get(LaravelLocalization::transRoute('routes.web.prices'), 'WebController@prices')->name('web.prices');
	Route::get(LaravelLocalization::transRoute('routes.web.referral-program'), 'WebController@referrals')->name('web.referrals');
	// Contacto
	Route::post('/contacto', 'WebController@send')->name('web.contact.send');
});


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

	// Categorias
	Route::get('/admin/categorias', 'CategoryController@index')->name('categorias.index')->middleware('permission:categories.index');
	Route::get('/admin/categorias/registrar', 'CategoryController@create')->name('categorias.create')->middleware('permission:categories.create');
	Route::post('/admin/categorias', 'CategoryController@store')->name('categorias.store')->middleware('permission:categories.create');
	Route::get('/admin/categorias/{category:slug}/editar', 'CategoryController@edit')->name('categorias.edit')->middleware('permission:categories.edit');
	Route::put('/admin/categorias/{category:slug}', 'CategoryController@update')->name('categorias.update')->middleware('permission:categories.edit');
	Route::delete('/admin/categorias/{category:slug}', 'CategoryController@destroy')->name('categorias.delete')->middleware('permission:categories.delete');
	Route::put('/admin/categorias/{category:slug}/activar', 'CategoryController@activate')->name('categorias.activate')->middleware('permission:categories.active');
	Route::put('/admin/categorias/{category:slug}/desactivar', 'CategoryController@deactivate')->name('categorias.deactivate')->middleware('permission:categories.deactive');

	// Preguntas
	Route::get('/admin/preguntas', 'QuestionController@index')->name('preguntas.index')->middleware('permission:questions.index');
	Route::get('/admin/preguntas/registrar', 'QuestionController@create')->name('preguntas.create')->middleware('permission:questions.create');
	Route::post('/admin/preguntas', 'QuestionController@store')->name('preguntas.store')->middleware('permission:questions.create');
	Route::get('/admin/preguntas/{question:slug}/editar', 'QuestionController@edit')->name('preguntas.edit')->middleware('permission:questions.edit');
	Route::put('/admin/preguntas/{question:slug}', 'QuestionController@update')->name('preguntas.update')->middleware('permission:questions.edit');
	Route::delete('/admin/preguntas/{question:slug}', 'QuestionController@destroy')->name('preguntas.delete')->middleware('permission:questions.delete');
	Route::put('/admin/preguntas/{question:slug}/activar', 'QuestionController@activate')->name('preguntas.activate')->middleware('permission:questions.active');
	Route::put('/admin/preguntas/{question:slug}/desactivar', 'QuestionController@deactivate')->name('preguntas.deactivate')->middleware('permission:questions.deactive');

	// Centro de Ayudas
	Route::get('/admin/ayudas', 'HelpController@index')->name('ayudas.index')->middleware('permission:helps.index');
	Route::get('/admin/ayudas/registrar', 'HelpController@create')->name('ayudas.create')->middleware('permission:helps.create');
	Route::post('/admin/ayudas', 'HelpController@store')->name('ayudas.store')->middleware('permission:helps.create');
	Route::get('/admin/ayudas/{help:slug}/editar', 'HelpController@edit')->name('ayudas.edit')->middleware('permission:helps.edit');
	Route::put('/admin/ayudas/{help:slug}', 'HelpController@update')->name('ayudas.update')->middleware('permission:helps.edit');
	Route::delete('/admin/ayudas/{help:slug}', 'HelpController@destroy')->name('ayudas.delete')->middleware('permission:helps.delete');
	Route::put('/admin/ayudas/{help:slug}/activar', 'HelpController@activate')->name('ayudas.activate')->middleware('permission:helps.active');
	Route::put('/admin/ayudas/{help:slug}/desactivar', 'HelpController@deactivate')->name('ayudas.deactivate')->middleware('permission:helps.deactive');

	// Articulos
	Route::get('/admin/articulos', 'ArticleController@index')->name('articulos.index')->middleware('permission:articles.index');
	Route::get('/admin/articulos/registrar', 'ArticleController@create')->name('articulos.create')->middleware('permission:articles.create');
	Route::post('/admin/articulos', 'ArticleController@store')->name('articulos.store')->middleware('permission:articles.create');
	Route::get('/admin/articulos/{article:slug}/editar', 'ArticleController@edit')->name('articulos.edit')->middleware('permission:articles.edit');
	Route::put('/admin/articulos/{article:slug}', 'ArticleController@update')->name('articulos.update')->middleware('permission:articles.edit');
	Route::delete('/admin/articulos/{article:slug}', 'ArticleController@destroy')->name('articulos.delete')->middleware('permission:articles.delete');
	Route::put('/admin/articulos/{article:slug}/activar', 'ArticleController@activate')->name('articulos.activate')->middleware('permission:articles.active');
	Route::put('/admin/articulos/{article:slug}/desactivar', 'ArticleController@deactivate')->name('articulos.deactivate')->middleware('permission:articles.deactive');

	// Mejores Usuarios
	Route::get('/admin/mejores', 'BestController@index')->name('mejores.index')->middleware('permission:bests.index');
	Route::get('/admin/mejores/registrar', 'BestController@create')->name('mejores.create')->middleware('permission:bests.create');
	Route::post('/admin/mejores', 'BestController@store')->name('mejores.store')->middleware('permission:bests.create');
	Route::get('/admin/mejores/{best:slug}/editar', 'BestController@edit')->name('mejores.edit')->middleware('permission:bests.edit');
	Route::put('/admin/mejores/{best:slug}', 'BestController@update')->name('mejores.update')->middleware('permission:bests.edit');
	Route::delete('/admin/mejores/{best:slug}', 'BestController@destroy')->name('mejores.delete')->middleware('permission:bests.delete');
	Route::put('/admin/mejores/{best:slug}/activar', 'BestController@activate')->name('mejores.activate')->middleware('permission:bests.active');
	Route::put('/admin/mejores/{best:slug}/desactivar', 'BestController@deactivate')->name('mejores.deactivate')->middleware('permission:bests.deactive');

	// Ajustes
	Route::get('/admin/ajustes', 'SettingController@edit')->name('ajustes.edit')->middleware('permission:settings.edit');
	Route::put('/admin/ajustes', 'SettingController@update')->name('ajustes.update')->middleware('permission:settings.edit');
});