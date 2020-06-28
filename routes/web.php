<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('frontend.templates.default');
// });

// Route::get('/', function () {
//     return view('frontend.templates.sites');
// });

Route::get('/', 'Frontend\SiteController@home');


// Route::get('/drink', 'DrinkController@index');
// Route::get('/drink/{drink}', 'Frontend\\DrinkController@index');
Route::get('/drink/{drink}', 'Frontend\\DrinkController@index');
Route::get('/food/{food}', 'Frontend\\FoodController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');