<?php
Route::get('/', function () { return redirect('/login'); });

Auth::routes(['register' => false]);

// Change Password Routes...
Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// routes for investor api
Route::get('investmentwizard', 'Auth\RegisterInvestorController@index')->name('auth.investment_wizard');
Route::post('registercustomer', 'Auth\RegisterInvestorController@store')->name('auth.register_customer');




Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('abilities/destroy', 'AbilitiesController@massDestroy')->name('abilities.massDestroy');
    Route::resource('abilities', 'AbilitiesController');
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');
    Route::resource('test', 'TestController');
    Route::resource('investment', 'InvestmentController');
    Route::get('investment/paid/{id}', 'InvestmentController@paid')->name('investment.paid');
    Route::resource('customerinvestment', 'InvestmentController');

Route::resource('divident', 'InvestmentController');
    Route::get('investment/viewcustomerinvestment/{id}', 'InvestmentController@viewcustomerinvestment')->name('investment.viewcustomerinvestment');

    

});
Route::group(['middleware' => ['auth'], 'prefix' => 'customer', 'as' => 'customer.', 'namespace' => 'Customer'], function () {
    Route::get('/home', 'CustomerHomeController@index')->name('home');
    
    
    Route::resource('investment', 'CustomerInvestmentController');



});
