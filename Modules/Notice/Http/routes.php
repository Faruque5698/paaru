<?php

/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'Modules\Notice\Http\Controllers\Frontend', 'as' => 'frontend.', 'middleware' => 'web', 'prefix' => 'notice'], function () {

  Route::get('/notice-list', 'FrontendNoticeController@noticeList')->name('notice_list');
  Route::post('/getSingleNotice', 'FrontendNoticeController@getSingleNotice')->name('get_single_notice');

});

/*
*
* Backend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'Modules\Notice\Http\Controllers\Backend', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'admin'], function () {

  // Activity Section
  $module_name = 'notice';
  $controller_name = 'NoticeController';
  Route::resource("$module_name", "$controller_name");

  Route::put('unpublished-notice/{notice}', "$controller_name@unpublished")->name("$module_name.unpublished");
  Route::put('published-notice/{notice}', "$controller_name@published")->name("$module_name.published");
});
