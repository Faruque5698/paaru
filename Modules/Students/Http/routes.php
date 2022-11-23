<?php

/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/



Route::group(['namespace' => 'Modules\Students\Http\Controllers\Frontend', 'as' => 'frontend.', 'middleware' => 'web', 'prefix' => 'student'], function () {

  Route::get('/students-list', 'FrontendStudentsController@studentList')->name('students_list');

});


/*
*
* Backend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'Modules\Students\Http\Controllers\Backend', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_students'], 'prefix' => 'admin'], function () {


});