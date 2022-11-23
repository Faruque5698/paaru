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
Route::group(['namespace' => 'Modules\Committee\Http\Controllers\Backend', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'admin'], function () {

  // Committee Section
  $module_name = 'committees';
  $controller_name = 'CommitteeController';

  Route::resource("$module_name", "$controller_name");
  // ajax call
  Route::post("$module_name/get_single_member", "$controller_name@get_single_member")->name("$module_name.get_single_member");
  Route::post("$module_name/update-committee", "$controller_name@update_committee")->name("$module_name.update_committee");
  Route::post("$module_name/committe-check", "$controller_name@committe_check")->name("$module_name.committe_check");



  // Committee Types Section
  $module_name = 'committee_types';
  $controller_name = 'CommitteeTypesController';
  Route::resource("$module_name", "$controller_name");
  Route::put('unpublished-committee-type/{id}', "$controller_name@unpublished")->name("$module_name.unpublished");
  Route::put('published-committee-type/{id}', "$controller_name@published")->name("$module_name.published");

  // Advisory Committee
  $module_name = 'advisory_committee';
  $controller_name = 'AdvisoryCommitteeController';
  Route::resource("$module_name", "$controller_name");
  Route::post("$module_name/update-advisory-committee", "$controller_name@update_advisory_committee")->name("$module_name.update_advisory_committee");
  // Advisory Committee


});
