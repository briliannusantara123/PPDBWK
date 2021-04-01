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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::get('/admin','AdminController@index')->middleware('auth');
Route::get('/admin/{id}/edit','AdminController@edit');
Route::post('/admin/{id}/update','AdminController@update');
Route::get('/admin/{id}/delete','AdminController@delete');
Route::get('/admin/{id}/show','AdminController@show');
Route::get('/admin/laporan','AdminController@laporan');
Route::get('/admin/{id}/cetak','AdminController@cetak');


Route::get('/siswa','SiswaController@index');
Route::post('/siswa/create','SiswaController@create');
