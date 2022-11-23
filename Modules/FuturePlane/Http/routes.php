<?php

/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/



Route::group(['namespace' => 'Modules\FuturePlane\Http\Controllers\Frontend', 'as' => 'frontend.', 'middleware' => 'web', 'prefix' => 'futurePlane'], function () {

  Route::get('/future-plane-list', 'FrontendFuturePlaneController@futurePlaneList')->name('future_plane_list');

});


/*
*
* Backend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'Modules\FuturePlane\Http\Controllers\Backend', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_futurePlane'], 'prefix' => 'admin'], function () {


});