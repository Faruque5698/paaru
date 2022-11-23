<?php

/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'Modules\Journal\Http\Controllers\Frontend', 'as' => 'frontend.', 'middleware' => 'web', 'prefix' => 'journal'], function () {

  	Route::get('/journal-list', 'FrontendJournalController@journalList')
  	->name('journal_list');

  	Route::get('/journal_details/{id}', 'FrontendJournalController@journalDetails')
  	->name('journal_details');

	Route::get('/journal_monthwise/{publication_date}', 'FrontendJournalController@journalMonthwise')->name('journal_monthwise');

});

/*
*
* Backend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'Modules\Journal\Http\Controllers\Backend', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'admin'], function () {

  $module_name = 'journals';
  $controller_name = 'BackendJournalController';

  Route::resource("$module_name", "$controller_name");

  Route::put('unpublished-journal/{journal}', "$controller_name@unpublished")->name("$module_name.unpublished");
  Route::put('published-journal/{journal}', "$controller_name@published")->name("$module_name.published");

});
