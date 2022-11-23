<?php

/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'Modules\Gallery\Http\Controllers\Frontend', 'as' => 'frontend.', 'middleware' => 'web', 'prefix' => 'gallery'], function () {

  Route::get('/gallery', 'FrontendGalleryController@gallary')->name('gallery');
  Route::get('/gallery-details/{gallery}', 'FrontendGalleryController@galleryDetails')->name('gallery_details');

});

/*
*
* Backend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'Modules\Gallery\Http\Controllers\Backend', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'admin'], function () {

  // Activity Section
  $module_name = 'gallery';
  $controller_name = 'GalleryController';
  Route::resource("$module_name", "$controller_name");
  Route::get('gallery-moreImage/{gallery}', ['as' => 'gallery.more', 'uses' => $controller_name.'@galleryMore']);

  Route::put('unpublished-gallery/{gallery}', "$controller_name@unpublished")->name("$module_name.unpublished");
  Route::put('published-gallery/{gallery}', "$controller_name@published")->name("$module_name.published");

  Route::delete('/gallery-delete/{galleryImage}' , ['as' => 'gallery.moreImage', 'uses' => $controller_name.'@galleryImagedestroy']);

  Route::post('/gallery-upload' , ['as' => 'photogallery.upload', 'uses' => $controller_name.'@galleryImageUpload']);

});
