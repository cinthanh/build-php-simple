<?php use App\Core\Route;

Route::get('', 'PagesController@home');
Route::post('names', 'PagesController@addName');
Route::get('about', 'PagesController@about');
Route::get('service', 'PagesController@service');

