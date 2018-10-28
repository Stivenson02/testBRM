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

//--DEfault Route LARAVEL --//
Auth::routes();

Route::get('/home', [
  'uses' => 'ProductsController@index',
  'as' => 'products_phat'
]);

//--TEST BRM ROUTE--//
Route::get('/', [
  'uses' => 'ProductsController@index',
  'as' => 'products_phat'
]);
Route::get('/nuevo_producto', [
  'uses' => 'ProductsController@viewAddproduct',
  'as' => 'view_add_product_phat'
]);
Route::get('/editar_preoducto/{id_product}', [
  'uses' => 'ProductsController@viewEditProduc',
  'as' => 'view_edit_product_phat'
]);
Route::post('/nuevo_producto', [
  'uses' => 'ProductsController@addproduct',
  'as' => 'add_product_phat'
]);
Route::put('/editar_preoducto/{id_product}', [
  'uses' => 'ProductsController@EditProduc',
  'as' => 'edit_product_phat'
]);
Route::delete('eliminar_embargos/{id_product}', [
  'uses' => 'ProductsController@deleteEmbargo',
  'as' => 'delete_embargo_product_phat'
]);
Route::delete('eliminar_producto/{id_product}', [
  'uses' => 'ProductsController@deleteProduct',
  'as' => 'delete_product_phat'
]);
Route::get('marcas', [
  'uses' => 'MarksController@index',
  'as' => 'marks_phat'
]);
Route::get('nueva_marca', [
  'uses' => 'MarksController@viewAddMark',
  'as' => 'view_marks_phat'
]);
Route::get('editar_marca/{id_mark}', [
  'uses' => 'MarksController@viewEditMark',
  'as' => 'view_edit_marks_phat'
]);
Route::post('nueva_marca', [
  'uses' => 'MarksController@addMark',
  'as' => 'add_marks_phat'
]);
Route::put('editar_marca/{id_mark}', [
  'uses' => 'MarksController@editMark',
  'as' => 'edit_marks_phat'
]);
Route::delete('eliminar_marca/{id_mark}', [
  'uses' => 'MarksController@deleteMark',
  'as' => 'delete_marks_phat'
]);
Route::get('embargues', [
  'uses' => 'EmbargoController@index',
  'as' => 'embargos_phat'
]); 
Route::get('nuevo_embargue', [
  'uses' => 'EmbargoController@viewAddEmbargo',
  'as' => 'view_embargo_phat'
]); 
Route::post('nuevo_embargue', [
  'uses' => 'EmbargoController@AddEmbargo',
  'as' => 'add_embargo_phat'
]);
Route::delete('eliminar_embargue/{id_embargo}', [
  'uses' => 'EmbargoController@deleteEmbargo',
  'as' => 'delete_embargo_phat'
]);


Route::get('imagen_storage', [
  'uses' => 'ProductsController@getStorageImage',
  'as' => 'imagen_storage_phat'
]);