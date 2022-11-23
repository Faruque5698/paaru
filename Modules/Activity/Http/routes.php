<?php

/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'Modules\Activity\Http\Controllers\Frontend', 'as' => 'frontend.', 'middleware' => 'web', 'prefix' => 'activity'], function () {

  Route::get('/activity-list', 'FrontendActivityController@activityList')->name('activity_list');
  Route::get('/activity-details/{id}', 'FrontendActivityController@activityDetails')->name('activity_details');

});

/*
*
* Backend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'Modules\Activity\Http\Controllers\Backend', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'admin'], function () {

  // Activity Section
  $module_name = 'activities';
  $controller_name = 'ActivityController';
  Route::resource("$module_name", "$controller_name");
  Route::put('unpublished-activitiy/{activity}', "$controller_name@unpublished")->name("$module_name.unpublished");
  Route::put('published-activitiy/{activity}', "$controller_name@published")->name("$module_name.published");

  // Activity Section
  $module_name = 'activitiy_types';
  $controller_name = 'ActivityTypeController';
  Route::resource("$module_name", "$controller_name");
  Route::put('unpublished-activitiy-type/{type}', "$controller_name@unpublished")->name("$module_name.unpublished");
  Route::put('published-activitiy-type/{type}', "$controller_name@published")->name("$module_name.published");

});
