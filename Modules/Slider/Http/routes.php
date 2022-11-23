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
Route::group(['namespace' => 'Modules\Slider\Http\Controllers\Backend', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'admin'], function () {

  $module_name = 'sliders';
  $controller_name = 'SliderController';

  Route::resource("$module_name", "$controller_name");

  Route::put('unpublished-slider/{slider}', "$controller_name@unpublished")->name("$module_name.unpublished");
  Route::put('published-slider/{slider}', "$controller_name@published")->name("$module_name.published");

});
