<?php

/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'Modules\Event\Http\Controllers\Frontend', 'as' => 'frontend.', 'middleware' => 'web', 'prefix' => 'event'], function () {

  Route::get('/event-list', 'FrontendEventController@eventList')->name('event_list');
  Route::get('/event-details/{id}', 'FrontendEventController@eventDetails')->name('event_details');
  Route::get('/event/payment/{id}', 'FrontendEventController@eventPayment')->name('event_pay');
  Route::get('update-payment','FrontendEventController@update_payment')->name('update_payment');
  Route::get('event_ticket/{id}','FrontendEventController@event_ticket')->name('event_ticket');
  Route::post('event_confirm','FrontendEventController@event_confirm')->name('event_confirm');
  Route::get('cash_payment/{id}','FrontendEventController@cash_payment')->name('cash_payment');
//  Route::get('online_payment/{id}','FrontendEventController@online_payment')->name('online_payment');

});

/*
*vaiya apnar controller e jan pl
* Backend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'Modules\Event\Http\Controllers\Backend', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'admin'], function () {

  // Activity Section
  $module_name = 'events';
  $controller_name = 'EventController';
  Route::get("$module_name/{id}/show-event-user", ['as' => "$module_name.showEventUser", 'uses' => "$controller_name@showEventUser"]);
  Route::resource("$module_name", "$controller_name");
  Route::put('unpublished-event/{event}', "$controller_name@unpublished")->name("$module_name.unpublished");
  Route::put('published-event/{event}', "$controller_name@published")->name("$module_name.published");
  Route::get('participant', "$controller_name@participant")->name("$module_name.participant");

});
