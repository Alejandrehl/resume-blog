<?php

Auth::routes();
Route::get('/', 'ResumeController@index')->name('index');
Route::get('/resume', 'ResumeController@resume')->name('resume');
Route::get('/services', 'ResumeController@services')->name('services');
Route::get('/home', 'HomeController@index')->name('home');
