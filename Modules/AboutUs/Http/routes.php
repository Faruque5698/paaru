<?php

/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'Modules\AboutUs\Http\Controllers\Frontend', 'as' => 'frontend.', 'middleware' => 'web', 'prefix' => 'aboutus'], function () {

  Route::get('/about', 'FrontendAboutUsController@about')->name('about');
  Route::get('/president-message', 'FrontendAboutUsController@presidentMessage')->name('president_message');
  Route::get('/executive-committee', 'FrontendAboutUsController@executiveCommittee')->name('executive_committee');
  Route::get('/advisory-committee', 'FrontendAboutUsController@advisoryCommittee')->name('advisory_committee');
  Route::get('/constitution', 'FrontendAboutUsController@constitution')->name('constitution');

});

/*
*
* Backend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'Modules\AboutUs\Http\Controllers\Backend', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'admin'], function () {

  // Start Members
  $module_name = 'aboutus';
  $controller_name = 'AboutUsController';
  Route::put("$module_name/{id}/delete-message", ['as' => "$module_name.deleteMessage", 'uses' => "$controller_name@deleteMessage"]);
  Route::resource("$module_name", "$controller_name");

  // PmMEssage
  $module_name = 'pmmessages';
  $controller_name = 'PMessageController';
  Route::resource("$module_name", "$controller_name");
  
  // Importan Links
  $module_name = 'links';
  $controller_name = 'ImportantLinkController';
  Route::resource("$module_name", "$controller_name");
  Route::put('unpublished-link/{link}', "$controller_name@unpublished")->name("$module_name.unpublished");
  Route::put('published-link/{link}', "$controller_name@published")->name("$module_name.published");


});
