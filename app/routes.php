<?php

//Route::get('','controllers/home.php');
//Route::get('about','controllers/about.php');
//Route::get('service','controllers/service.php');
//Route::post('names', 'controllers/add-name.php');

Route::get('', 'PagesController@home');
Route::post('names', 'PagesController@addName');
Route::get('about', 'PagesController@about');
Route::get('service', 'PagesController@service');

