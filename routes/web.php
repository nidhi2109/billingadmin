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
Route::get('/', function () {
  return View::make('login');
});
Route::any('api', 'SoapController@server');
/*
LOGIN LOGOUT ROUTES
*/
Route::get('login', function() {
    return View::make('login');
})->name('login');

Route::post('checklogin','LoginController@checkdata');
Route::get('logout','LoginController@logoutuser')->name('logout');

/*
ADMIN ROUTES
*/
Route::group(['prefix' => 'admin','middleware' => ['LoginAuth']], function () {
	Route::get('dashboard','Admin\DashboardController@index')->name('admindashboard');
    Route::resource('category','Admin\CategoryController');
    Route::get('downloadCSV','Admin\CategoryController@downloadCSV')->name('category.downloadCSV');
    Route::resource('product','Admin\ProductController');
    Route::get('account','Admin\AccountController@index')->name('adminAccount');
    Route::post('accountUpdate','Admin\AccountController@updateData')->name('accountUpdate');
	Route::get('agent','Admin\AgentController@index')->name('adminagent');
	Route::get('role','Admin\RoleController@index')->name('adminrole');
//	Route::get('product','Admin\ProductController@index')->name('adminproduct');
	Route::get('order','Admin\OrderController@index')->name('adminorder');
	Route::get('payment','Admin\PaymentController@index')->name('adminpayment');
	Route::get('invoice','Admin\InvoiceController@index')->name('admininvoice');
	Route::get('report','Admin\ReportController@index')->name('adminreport');
});

/*
AGENT ROUTES
*/
Route::group(['prefix' => 'agent','middleware' => ['LoginAuth']], function (){

	Route::get('dashboard','Agent\DashboardController@index')->name('agentdashboard');
	Route::get('location','Agent\LocationController@index')->name('agentlocation');
	Route::get('account','Agent\AccountController@index')->name('agentaccount');
	Route::get('customer','Agent\CustomerController@index')->name('agentcustomer');
	Route::get('device','Agent\DeviceController@index')->name('agentdevice');
	Route::get('product','Agent\ProductController@index')->name('agentproduct');	
});

/*
CONSUMER ROUTES
*/
Route::group(['prefix' => 'consumer'], function () {
    Route::get('registration','Consumer\AccountController@regform')->name('consumeRegistration');
    Route::post('consumerSaveData','Consumer\AccountController@savedata')->name('consumerSaveData');

    Route::group(['middleware' => 'LoginAuth'], function() {
        Route::get('dashboard', 'Consumer\DashboardController@index')->name('consumerDashboard');
        Route::get('account', 'Consumer\AccountController@index')->name('consumerAccount');
        Route::get('billing', 'Consumer\BillingController@index')->name('consumerBilling');
        Route::get('device', 'Consumer\DeviceController@index')->name('consumerDevice');
        Route::get('notification', 'Consumer\NotificationController@index')->name('consumerNotification');
    });

});

