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
Route::get('/','HomeController@index');
Route::get('/admin', 'HomeController@admin')->name("main");
Route::get('/minor', 'HomeController@minor')->name("minor");
Route::get('/login','HomeController@login')->name("login");
Route::get('/cinema','HomeController@cinema')->name("cinema");
Route::get('/cinemahall','HomeController@cinemahall')->name("cinemahall");
Route::get('/schedule','HomeController@schedule')->name("schedule");
Route::get('/cinema-add','HomeController@cinemaAdd')->name("cinema-add");
Route::any('/upload-cinema-logo','HomeController@uploadCinemaLogo')->name("upload-cinema-logo");
