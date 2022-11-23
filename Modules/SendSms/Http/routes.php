<?php

/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/


/*
*
* Backend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'Modules\SendSms\Http\Controllers\Backend', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'admin'], function () {

  // Activity Section
  $module_name = 'sendsms';
  $controller_name = 'SendSmsController';
  Route::resource("$module_name", "$controller_name");
  Route::post("$module_name/send-message-to-members/", "$controller_name@sendMessageToMembers")->name("$module_name.sendMessageToMembers");


});
