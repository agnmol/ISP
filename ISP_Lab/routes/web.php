<?php

Route::get('/', 'LoginController@index');
Route::get('/register', 'RegisterController@index');
Route::get('/home', 'HomeController@index');

Route::get('/customers', 'CustomersController@index');
Route::get('/customers/edit/{id}', 'CustomersController@edit')->name('editCustomer');

Route::get('/jobs', 'JobsController@index');
Route::get('/jobs/add', 'AddJobController@index');

Route::get('/restaurant', 'RestaurantController@index');
Route::get('/restaurant/add', 'AddToMenuController@index');
Route::get('/restaurant/book', 'TableReservationController@index');

Route::get('/services', 'ServicesController@index');
Route::get('/services/add', 'AddServiceController@index');
Route::get('/services/booked', 'BookedServicesController@index');
Route::get('/services/group', 'ServicesGroupController@index');
Route::get('/services/group2', 'ServicesGroup2Controller@index');

Route::get('/workers', 'WorkersController@index')->name('workers');
Route::get('/workers/add', 'WorkersController@addWorker')->name('addWorker');
Route::post('/workers/insert', 'WorkersController@insertWorker')->name('insertWorker');
Route::get('/workers/delete/{id}', 'WorkersController@fireWorker')->name('deleteWorker');
Route::get('/workers/edit/{id}', 'WorkersController@editWorker')->name('editWorker');
Route::post('/workers/edit/confirm/{id}', 'WorkersController@insertWorker')->name('confirmEditWorker');

Route::get('/rooms', 'RoomsController@index');
//Route::get('/rooms/free', 'FreeRoomsController@index');
Route::get('/rooms/user-reservations', 'UserRoomsReservationsController@index');
Route::get('/rooms/reservations', 'RoomsReservationsController@index');
Route::get('/reports/', 'servicesReportController@index');
Route::get('/reports/services', 'servicesReportController@index');
Route::get('/reports/restaurant', 'restaurantReportController@index');
Route::get('/reports/reservations', 'reservationsReportController@index');
