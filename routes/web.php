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

Route::get('/', 'test@view');

Route::get('/helloworld', 'test@view');
Route::get('/helloworld', 'test@display');

Route::get('/addperson', 'personController@addperson');
Route::post('/addperson', 'personController@addperson');

Route::get('/addcredit', 'creditController@addcredit');
Route::get('/addcredit', 'personController@AllPerson');

Route::post('/addcredit', 'personController@AllPerson');
Route::post('/addcredit', 'creditController@addcredit');


Route::get('/person/{id}', 'personController@afficherperson');

Route::get('/credits', 'test@display');