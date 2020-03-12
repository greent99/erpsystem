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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'language'],function(){
    Route::get('/','admin\LanguageController@Index')->name('language');
    Route::get('add','admin\LanguageController@getAdd')->name('add_language');
    Route::post('add','admin\LanguageController@postAdd');
    Route::get('update/{id}','admin\LanguageController@getUpdate')->name('update_language');
    Route::post('update/{id}','admin\LanguageController@postUpdate');
    Route::get('delete/{id}','admin\LanguageController@getDelete')->name('delete_language');
    Route::post('delete','admin\LanguageController@postDelete');
    Route::get('renderimport','admin\LanguageController@getRenderImport')->name('renderimport_language');
    Route::post('renderimport','admin\LanguageController@postRenderImport');
    Route::get('renderexport','admin\LanguageController@getRenderExport')->name('renderexportlanguage');
    Route::post('renderexport','admin\LanguageController@postRenderExport');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
