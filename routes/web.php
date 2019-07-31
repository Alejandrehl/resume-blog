<?php

Auth::routes();
Route::get('/', 'ResumeController@index')->name('resume.index');
Route::get('/home', 'HomeController@index')->name('home');
