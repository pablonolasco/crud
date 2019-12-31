<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Diseño Rest
|--------------------------------------------------------------------------
GET-------------------->/messages--------------->MessageController@index------------>Todos los mensajes
GET-------------------->/messages/create-------->MessageController@create----------->Formulario de creacion
POST------------------->/messages--------------->MessageController@store------------>Guardar Mensajes y redireccionar
GET-------------------->/messages/{id}---------->MessageController@show------------->Un mensaje especifico
GET-------------------->/messages/{id}/edit----->MessageController@edit------------->Formulario de edicion
PUT/PATCH-------------->/messages/{id}---------->MessageController@update----------->Actualizar mensaje y redirecciona
DELETE----------------->/messages/{id}---------->MessageController@destroy---------->Elimina mensaje y redirecciona

CREATE--->POST
READ----->GET
UPDATE--->PUT/PATCH
DELETE--->DELETE
*/

Route::get('/', 'ProductController@index')->name('home');
Route::get('/producto/crear', 'ProductController@create')->name('create-product');
Route::get('/producto/show/{id}', 'ProductController@show')->name('show-product');
Route::post('/producto/save', 'ProductController@save')->name('save-product');
Route::get('/producto/edit/{id}','ProductController@edit')->name('edit-product');
Route::patch('/producto/{id}/edit', 'ProductController@update')->name('update-product');
Route::delete('/producto/{id}','ProductController@destroy')->name('delete-product');

Route::get('/categorias','CategoryController@index')->name('categorias');
