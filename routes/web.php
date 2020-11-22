<?php

use Illuminate\Support\Facades\Route;

/*ROTAS PRIMÁRIAS */


Auth::routes();
Route::get('/','App\Http\Controllers\SiteController@index')->name('site.index');
Route::view("index", 'index');

Route::get('/listar-propostas', 'App\Http\Controllers\SiteController@listar_propostas')->name('site.listar_propostas');

Route::get('/editar-propostas/{id}','App\Http\Controllers\SiteController@editproposta' )->name('site.editproposta');

Route::post('/update-propostas/{id}', 'App\Http\Controllers\SiteController@updateproposta')->name('site.updateproposta');

Route::any('/buscar-propostas', 'App\Http\Controllers\SiteController@localizarproposta')->name('site.localizarproposta');

Route::get('/inicial', 'App\Http\Controllers\SiteController@inicial')->name('site.inicial');

Route::get('/listar-clientes', 'App\Http\Controllers\SiteController@listar_clientes')->name('site.listar_clientes');

Route::get('/exportar-propostas', 'App\Http\Controllers\SiteController@export')->name('site.exportar_propostas');

Route::get('/listar-usuarios', 'App\Http\Controllers\SiteController@listar_usuarios')->name('site.listar_usuarios');

Route::get('/cadastro-clientes','App\Http\Controllers\SiteController@cadastro_clientes')->name('site.cadastro_clientes');

Route::get('/cadastro-propostas', 'App\Http\Controllers\SiteController@cadastro_propostas')->name('site.cadastro_propostas');

Route::get('/cadastro-usuarios', 'App\Http\Controllers\SiteController@cadastro_usuarios')->name('site.cadastro_usuarios');

Route::get('/deslogar', 'App\Http\Controllers\SiteController@deslogar')->name('site.deslogar');

/* ROTAS SECUNDÁRIAS */

Route::post('/importar-usuario', 'App\Http\Controllers\SiteController@importar_usuario')->name('site.importar_usuario');

Route::post('/importar-clientes', 'App\Http\Controllers\SiteController@importar_clientes')->name('site.importar_clientes');

Route::post('/importar-propostas', 'App\Http\Controllers\SiteController@importar_propostas')->name('site.importar_propostas');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
