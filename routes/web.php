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
    return view('auth.login');
});

Auth::routes();


Route::group(['middleware'=>['auth']],function (){

    Route::get('/home', 'HomeController@index')->name('home');

    //Audit Area
    Route::group(['middleware'=>['Audit']],function (){

        Route::resource('audit','AuditController');

        Route::resource('searching','AuditSearchController');

        Route::resource('audit-admins','AuditAdminsController');

    });

    //Transport Area
    Route::group(['middleware'=>['Transport']],function (){

        Route::resource('vehicle','vehicleController');

        Route::resource('operation','operationController');

        Route::resource('repair','repairController');

        Route::resource('service','servicesController');

        Route::resource('roadworthy','roadworthyController');

        Route::resource('insurance','insuranceController');

        Route::resource('users','usersController');
        Route::resource('drivers','driversController');

        Route::resource('expenses','VehicleExpensesController');

        Route::resource('serviceExpense','VehicleExpensesServicingController');

        Route::resource('insuranceExpenses','InsuranceExpensesController');

    });


});


