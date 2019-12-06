<?php

Route::get('/', 'LoginController@index');
Route::get('/register', 'RegisterController@index');
Route::get('/home', 'HomeController@index');

Route::get('/customers', 'CustomersController@index');
Route::get('/customers/edit/{id}', 'CustomersController@edit')->name('editCustomer');

Route::get('/jobs', 'JobsController@index');
Route::get('/jobs/add', 'JobsController@add');

Route::get('/restaurant', 'RestaurantController@index');
Route::get('/restaurant/add', 'RestaurantController@add');
Route::get('/restaurant/book', 'RestaurantController@reserveTable');

Route::get('/services', 'ServicesController@index');
Route::get('/services/add', 'ServicesController@add');
Route::get('/services/booked', 'ServicesController@booked');
Route::get('/services/group', 'ServicesController@group1');
Route::get('/services/group2', 'ServicesController@group2');

Route::get('/workers', 'WorkersController@index')->name('workers');
Route::get('/workers/add', 'WorkersController@addWorker')->name('addWorker');
Route::post('/workers/insert', 'WorkersController@insertWorker')->name('insertWorker');
Route::get('/workers/delete/{id}', 'WorkersController@fireWorker')->name('deleteWorker');
Route::get('/workers/edit/{id}', 'WorkersController@editWorker')->name('editWorker');
Route::post('/workers/edit/confirm/{id}', 'WorkersController@insertWorker')->name('confirmEditWorker');

Route::get('/rooms', 'RoomsController@index');
Route::get('/rooms/reservations', 'RoomsController@reservations');
Route::get('/rooms/reservations/confirm/{id}', 'RoomsController@confirm')->name('confirmReservation');
//Route::get('/rooms/free', 'RoomsController@freeRooms');
Route::get('/rooms/user-reservations', 'RoomsController@userReservations');


Route::get('/reports/', 'reportController@services');
Route::get('/reports/services', 'reportController@services');
Route::get('/reports/restaurant', 'reportController@restaurant');
Route::get('/reports/reservations', 'reportController@reservations');
