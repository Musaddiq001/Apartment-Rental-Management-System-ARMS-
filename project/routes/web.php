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

Route::get('/mywebsite', 'WebsiteController@index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function(){
	return view('admin.index');
});

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');

Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/manager', 'ManagerController@index')->name('manager.managerindex');

Route::get('/login/passrecover', 'LoginController@passrecover')->name('login.passrecover');
Route::post('/login/passrecover', 'LoginController@passrecovered');
	
	
Route::get('/signup', 'SignupController@index')->name('signup.index');
Route::post('/signup', 'SignupController@insert');
Route::get('/logout', 'LogoutController@index')->name('logout');;


Route::group(['middleware'=>['sess']], function(){
	Route::get('/admin', 'AdminController@index')->name('admin.index');
	
	/*Route::get('/admin/assignmanager', 'AdminController@assign')->name('admin.assign');
    Route::post('/admin/assignmanager', 'AdminController@assigned');*/
	
	Route::get('/admin/view_managers', 'AdminController@list')->name('admin.list');
	Route::get('/admin/view_customers', 'AdminController@list1')->name('admin.list1');
	Route::get('/admin/view_houseowners', 'AdminController@list2')->name('admin.list2');
	Route::get('/admin/view_houses', 'AdminController@list3')->name('admin.list3');
	Route::get('/admin/view_rented', 'AdminController@list4')->name('admin.list4');
	
	Route::get('/admin/details/{id}', 'AdminController@show')->name('admin.show')->middleware('sess');
	
		Route::get('/admin/add', 'AdminController@add')->name('admin.add');
		Route::post('/admin/add', 'AdminController@insert');
		
		Route::get('/admin/edit', ['as'=>'admin.edit','uses'=>'AdminController@edit']);
		Route::post('/admin/edit', 'AdminController@update')->name('admin.update');
		
		Route::get('/admin/assign/{id}', 'AdminController@assign')->name('admin.assign');
		Route::post('/admin/assign/{id}', 'AdminController@assigned')->name('admin.assigned');
		
		Route::get('/admin/edit1/{id}', ['as'=>'admin.edit1','uses'=>'AdminController@edit1']);
		Route::post('/admin/edit1/{id}', 'AdminController@update1');
		Route::get('/admin/delete/{id}', 'AdminController@delete')->name('admin.delete');
		Route::post('/admin/delete/{id}', 'AdminController@destroy')->name('admin.destroy');
		Route::get('/admin/delete1/{id}', 'AdminController@delete1')->name('admin.delete1');
		Route::post('/admin/delete1/{id}', 'AdminController@destroy1')->name('admin.destroy1');
	    Route::get('/admin/delete2/{id}', 'AdminController@delete2')->name('admin.delete2');
		Route::post('/admin/delete2/{id}', 'AdminController@destroy2')->name('admin.destroy2');
		Route::get('/admin/edit2/{id}', ['as'=>'admin.edit2','uses'=>'AdminController@edit2']);
		Route::post('/admin/edit2/{id}', 'AdminController@update');
	//	Route::get('admin.list2/search', 'AdminController@searchBus')->name('search');
        Route::get('searchCustomer', 'AdminController@searchCustomer')->name('searchCustomer');
		Route::get('search', 'AdminController@searchManager')->name('search');
		Route::get('searchHouseowner', 'AdminController@searchHouseowner')->name('searchHouseowner');
		Route::get('searchHouses', 'AdminController@searchHouses')->name('searchHouses');
		Route::get('searchRented', 'AdminController@searchRented')->name('searchRented');

});