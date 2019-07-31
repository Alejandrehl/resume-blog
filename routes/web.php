<?php

Auth::routes();
Route::get('/', 'ResumeController@index')->name('index');
Route::get('/resume', 'ResumeController@resume')->name('resume');
Route::get('/home', 'HomeController@index')->name('home');
