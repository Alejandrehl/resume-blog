<?php

Auth::routes();
Route::get('/', 'ResumeController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/resume', 'ResumeController@resume')->name('resume');
Route::get('/services', 'ResumeController@services')->name('services');
Route::get('/portfolio', 'ResumeController@portfolio')->name('portfolio');
Route::get('/portfolio-details', 'ResumeController@portfolio_details')->name('portfolio/details');
Route::get('/blog', 'ResumeController@blog')->name('blog');
Route::get('/blog-details', 'ResumeController@blog_details')->name('blog/details');
Route::get('/contact', 'ResumeController@contact')->name('contact');
