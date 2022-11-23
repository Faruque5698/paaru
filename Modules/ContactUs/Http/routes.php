<?php

/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/



Route::group(['namespace' => 'Modules\ContactUs\Http\Controllers\Frontend', 'as' => 'frontend.', 'middleware' => 'web', 'prefix' => 'contact'], function () {

	Route::get('/contact', 'FrontendContactUsController@contactUs')->name('contact_us');
	Route::post('/send-message', 'FrontendContactUsController@messageSent')->name('send_message');

});


/*
*
* Backend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'Modules\ContactUs\Http\Controllers\Backend', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_contact'], 'prefix' => 'admin'], function () {

	$module_name = 'contactus';
	$controller_name = 'ContactUsController';
	Route::get("$module_name/messages", ['as' => "$module_name.messages", 'uses' => "$controller_name@messages"]);
	Route::resource("$module_name", "$controller_name");

	Route::put('unpublished-contacts/{contact}', "$controller_name@unpublished")->name("$module_name.unpublished");
	Route::put('published-contacts/{contact}', "$controller_name@published")->name("$module_name.published");
});