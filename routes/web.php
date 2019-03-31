<?php


Route::get('/','PagesController@welcome');
Route::get('/about','PagesController@about');
Route::resource('/songs','songsContoller');