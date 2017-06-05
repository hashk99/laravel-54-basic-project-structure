<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//DASHBOARDS

Route::get('/admin', 'DashboardController@adminIndex');
Route::get('/reviewer', 'DashboardController@reviewerIndex');
Route::get('/doctor', 'DashboardController@reviewerIndex');
Route::get('/researcher', 'DashboardController@researcherIndex');


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//super admin dashboard functions
Route::group(['prefix' => 'admin'], function () {

	//DASHBOARD
/*	Route::get('/', 'CustomerController@showMainPage');

    Route::get('add-device', 'CustomerDeviceController@create');
	Route::resource('/manage-devices', 'CustomerDeviceController');*/
	 
	
});

// review admin dashboard functions
Route::group(['prefix' => 'reviewer'], function () {

	//DASHBOARD
/*	Route::get('/', 'CustomerController@showMainPage');

    Route::get('add-device', 'CustomerDeviceController@create');
	Route::resource('/manage-devices', 'CustomerDeviceController');*/
	 
	
});

// researcher dashboard functions
Route::group(['prefix' => 'researcher'], function () {

	//DASHBOARD
/*	Route::get('/', 'CustomerController@showMainPage');

    Route::get('add-device', 'CustomerDeviceController@create');
	Route::resource('/manage-devices', 'CustomerDeviceController');*/
	 
	
});