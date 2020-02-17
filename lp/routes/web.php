<?php


/////admin panel///////

Route::get('/Admin/Login', 'Admin\LoginController@index')->name('Admin/Login');

Route::post('Admin/Login/Attempt', 'Admin\LoginController@attempt')->name('Admin/Login/Attempt');

Route::post('Lead/Store', 'LeadController@store')->name('Lead/Store');

Route::post('Test/Store', 'TestController@store')->name('Test/Store');

Route::get('index.html', 'LeadController@lead');

Route::get('thankyou.html', 'LeadController@thankyou');

Route::get('/', 'LeadController@lead');



Route::group(['middleware'=>'auth'],function(){



Route::get('/Admin', 'Admin\LeadController@index');

Route::get('/Admin/Business', 'Admin\BusinessController@index')->name('Admin/Business');

Route::get('Admin/Business/Add', 'Admin\BusinessController@create')->name('Admin/Business/Add');

Route::post('Admin/Business/Store', 'Admin\BusinessController@store')->name('Admin/Business/Store');

Route::post('Admin/Business/EditSession', 'Admin\BusinessController@editsession')->name('Admin/Business/EditSession');

Route::get('Admin/Business/Edit', 'Admin\BusinessController@edit')->name('Admin/Business/Edit');

Route::post('Admin/Business/Delete', 'Admin\BusinessController@delete')->name('Admin/Business/Delete');

Route::post('Admin/Business/Update', 'Admin\BusinessController@update')->name('Admin/Business/Update');




Route::get('Admin/Lead', 'Admin\LeadController@index')->name('Admin/Lead');



Route::post('Admin/Lead/EditSession', 'Admin\LeadController@editsession')->name('Admin/Lead/EditSession');

Route::get('Admin/Lead/Edit', 'Admin\LeadController@edit')->name('Admin/Lead/Edit');

Route::post('Admin/Lead/Delete', 'Admin\LeadController@delete')->name('Admin/Lead/Delete');

Route::post('Admin/Lead/Update', 'Admin\LeadController@update')->name('Admin/Lead/Update');


Route::get('Admin/FacebookLead', 'Admin\FacebookLeadController@index')->name('Admin/FacebookLead');

Route::get('Admin/FacebookLead/Add', 'Admin\FacebookLeadController@create')->name('Admin/FacebookLead/Add');

Route::post('Admin/FacebookLead/Store', 'Admin\FacebookLeadController@store')->name('Admin/FacebookLead/Store');

Route::post('Admin/FacebookLead/EditSession', 'Admin\FacebookLeadController@editsession')->name('Admin/FacebookLead/EditSession');

Route::get('Admin/FacebookLead/Edit', 'Admin\FacebookLeadController@edit')->name('Admin/FacebookLead/Edit');

Route::post('Admin/FacebookLead/Delete', 'Admin\FacebookLeadController@delete')->name('Admin/FacebookLead/Delete');

Route::post('Admin/FacebookLead/Update', 'Admin\FacebookLeadController@update')->name('Admin/FacebookLead/Update');

Route::post('Admin/FacebookLead/SendSMS', 'Admin\FacebookLeadController@sendsms')->name('Admin/FacebookLead/SendSMS');

Route::post('Admin/FacebookLead/SendEmail', 'Admin\FacebookLeadController@sendemail')->name('Admin/FacebookLead/SendEmail');




Route::get('Admin/SendSMS', 'Admin\SendSMSController@index')->name('Admin/SendSMS');

Route::post('Admin/SendSMS/Store', 'Admin\SendSMSController@store')->name('Admin/SendSMS/Store');

Route::post('Admin/SendSMS/EditSession', 'Admin\SendSMSController@editsession')->name('Admin/SendSMS/EditSession');

Route::get('Admin/SendSMS/Edit', 'Admin\SendSMSController@edit')->name('Admin/SendSMS/Edit');

Route::post('Admin/SendSMS/Delete', 'Admin\SendSMSController@delete')->name('Admin/SendSMS/Delete');

Route::post('Admin/SendSMS/Update', 'Admin\SendSMSController@update')->name('Admin/SendSMS/Update');



Route::get('Admin/SendEmail', 'Admin\SendEmailController@index')->name('Admin/SendEmail');

Route::post('Admin/SendEmail/Store', 'Admin\SendEmailController@store')->name('Admin/SendEmail/Store');

Route::post('Admin/SendEmail/EditSession', 'Admin\SendEmailController@editsession')->name('Admin/SendEmail/EditSession');

Route::post('Admin/FacebookLead/EditSMSSession', 'Admin\FacebookLeadController@editsmssession')->name('Admin/FacebookLead/EditSMSSession');

Route::post('Admin/FacebookLead/EditMailSession', 'Admin\FacebookLeadController@editmailsession')->name('Admin/FacebookLead/EditMailSession');

Route::get('Admin/FacebookLead/EditSMS', 'Admin\FacebookLeadController@editsms')->name('Admin/FacebookLead/EditSMS');

Route::get('Admin/FacebookLead/EditMail', 'Admin\FacebookLeadController@editmail')->name('Admin/FacebookLead/EditMail');


Route::get('Admin/SendEmail/Edit', 'Admin\SendEmailController@edit')->name('Admin/SendEmail/Edit');

Route::post('Admin/SendEmail/Delete', 'Admin\SendEmailController@delete')->name('Admin/SendEmail/Delete');

Route::post('Admin/SendEmail/Update', 'Admin\SendEmailController@update')->name('Admin/SendEmail/Update');



});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
