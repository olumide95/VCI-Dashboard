<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::auth();

Route::get('register', function () {
	    return 'You are not authorised to utilize this resource';
});
Route::get('/', 'HomeController@organisationDashboard')->name('organisation-dashboard');
Route::get('/requests/all', 'OrganisationController@requests')->name('requests');
Route::any('/requests/add', 'OrganisationController@addRequest')->name('add-request');
Route::any('/requests/update/{id}','OrganisationController@updateRequest')->name('request-update');
Route::delete('/requests/delete/{id}','OrganisationController@deleteRequest')->name('request-delete');

Route::group(['prefix'=>'admin','middleware' => 'role:Admin'], function(){

 Route::resource('users','UserController');
 Route::resource('roles','RoleController');
 Route::get('/','HomeController@adminDashboard')->name('admin-dashboard');
 Route::get('/organisations','AdminController@organisations')->name('organisations');
 Route::get('/requests','AdminController@requests')->name('organisations-requests');
 Route::get('/requests/update/status/{id}','OrganisationController@updateStatus')->name('status-update');

});


Route::get('unauthorised', function () {
	    return 'You are not authorised to utilize this resource';
});