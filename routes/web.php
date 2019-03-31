<?php

Route::get('/index','HomeController@index');
Route::get('/','PagesController@welcome');
Route::get('/about','PagesController@about');
Route::resource('/songs','songsContoller');