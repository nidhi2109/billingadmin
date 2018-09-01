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
	Route::get('dashboard','Admin\DashboardController@index')->name('adminDashboard');
    Route::get('account','Admin\AccountController@index')->name('adminAccount');
	//category
    Route::resource('category','Admin\CategoryController');
    Route::get('category.downloadCSV','Admin\CategoryController@downloadCSV')->name('category.downloadCSV');

    //product
    Route::resource('product','Admin\ProductController');
    Route::get('product.downloadCSV','Admin\ProductController@downloadCSV')->name('product.downloadCSV');

    //invoice
    Route::resource('invoice','Admin\InvoiceController');
    Route::get('invoice.downloadCSV','Admin\ProductController@downloadCSV')->name('invoice.downloadCSV');


    Route::post('accountUpdate','Admin\AccountController@updateData')->name('accountUpdate');
	Route::get('agent','Admin\AgentController@index')->name('adminagent');
	Route::get('role','Admin\RoleController@index')->name('adminrole');
//	Route::get('product','Admin\ProductController@index')->name('adminproduct');

    //order
    Route::get('order','Admin\OrderController@index')->name('adminorder');
    Route::get('order/view/{id}','Admin\OrderController@view')->name('order.view');
    Route::get('order/applyinvoice/{id}','Admin\OrderController@applyinvoice')->name('order.applyinvoice');
    Route::get('order/generateinvoice/{id}','Admin\OrderController@generateinvoice')->name('order.generateinvoice');
    Route::get('order/downloadCSV','Admin\OrderController@downloadCSV')->name('order.downloadCSV');
    Route::get('order/create','Admin\OrderController@create')->name('order.create');
    Route::get('order/create/createorder/{id}','Admin\OrderController@createorder')->name('order.create.createorder');

	Route::get('payment','Admin\PaymentController@index')->name('adminpayment');

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

