<?php

// Route::get('/', function () {
//     return 'admin pages';
// })->name('dashboard');

// Route::get('/admin', function () {
//     return 'admin pages';
// })->name('admin');


Route::get('/', 'HomeController@index')->name('dashboard');

Route::get('/visitor', 'VisitorController@index')->name('visitor.index');
// Json Visitor

Route::get('/visitor/data', 'DataController@visitors')->name('visitor.data');


Route::get('/drink', 'DrinkController@index')->name('drink.index');
Route::get('/drink/create', 'DrinkController@create')->name('drink.create');
Route::post('/drink', 'DrinkController@store')->name('drink.store');
Route::get('/drink/{drink}/edit', 'DrinkController@edit')->name('drink.edit');
Route::put('/drink/{drink}', 'DrinkController@update')->name('drink.update');
Route::delete('/drink/{drink}', 'DrinkController@destroy')->name('drink.destroy');
//jSon Drink
Route::get('/drink/data', 'DataController@drinks')->name('drink.data');


Route::get('/food', 'FoodController@index')->name('food.index');
Route::get('/food/create', 'FoodController@create')->name('food.create');
Route::post('/food', 'FoodController@store')->name('food.store');
Route::get('/food/{food}/edit', 'FoodController@edit')->name('food.edit');
Route::put('/food/{food}', 'FoodController@update')->name('food.update');
Route::delete('/food/{food}', 'FoodController@destroy')->name('food.destroy');

// jSon Food
Route::get('/food/data', 'DataController@foods')->name('food.data');