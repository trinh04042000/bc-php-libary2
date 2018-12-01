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

Route::group(['prefix' => 'libary'], function (){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/', 'LibaryController@index')->name('libary.index');
    Route::post('/create', 'LibaryController@store')->name('libary.store');
    Route::get('/create', 'LibaryController@create')->name('libary.create');
    Route::get('/{id}/edit', 'LibaryController@edit')->name('libary.edit');
    Route::post('{id}/update', 'LibaryController@update')->name('libary.update');
    Route::get('/{id}/destroy', 'LibaryController@destroy')->name('libary.destroy');
    Route::get('/listbook', 'LibaryController@listbook')->name('libary.listbook');
    Route::get('/listauthor', 'LibaryController@listauthor')->name('libary.listauthor');
});