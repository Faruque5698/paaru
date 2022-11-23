<?php

/*
*
* Frontend Routes
*
* --------------------------------------------------------------------
*/



Route::group(['namespace' => 'Modules\Members\Http\Controllers\Frontend', 'as' => 'frontend.', 'middleware' => 'web', 'prefix' => 'member'], function () {

  Route::get('/all-members', 'FrontendMembersController@allMembers')
  ->name('all_members');
  Route::get('/life-member', 'FrontendMembersController@lifeMembers')
  ->name('life_members');

  Route::get('/alumni-members', 'FrontendMembersController@alumniMembers')
  ->name('alumni_members');

  Route::get('/join-member', 'FrontendMembersController@joinMember')
  ->name('join_member');

  Route::post('/member-save', 'FrontendMembersController@memberSave')
  ->name('member_save');

  Route::get('/renowned-alumni-members', 'FrontendMembersController@renownedAlumniMembers')
  ->name('renowned_alumni_members');

  Route::get('/renowned-alumni-members-details/{id}',
  'FrontendMembersController@renownedAlumniMembersDetails')
  ->name('renowned_alumni_members_details');


  Route::get("/show_members/{id}", [
    'as' => "show_members",
    'uses' => "FrontendMembersController@show_members"
  ]);
  
  // Ajax call
  Route::post('/get_renowned_alumni_member', 'FrontendMembersController@get_renowned_alumni_member')->name('get_renowned_alumni_member');
  
    Route::post('/get_single_member', 'FrontendMembersController@get_single_member')->name('get_single_member');

  // Ajax call


});


/*
*
* Backend Routes
*
* --------------------------------------------------------------------
*/
Route::group(['namespace' => 'Modules\Members\Http\Controllers\Backend', 'as' => 'backend.', 'middleware' => ['web', 'auth', 'can:view_backend'], 'prefix' => 'admin'], function () {

  // Members
  $module_name = 'members';
  $controller_name = 'MembersController';
  
  Route::get("$module_name/get_life_member", [
    'as' => "$module_name.get_life_member",
    'uses' => "$controller_name@get_life_member"
  ]);

  Route::get("$module_name/get_alumni_members", [
    'as' => "$module_name.get_alumni_members",
    'uses' => "$controller_name@get_alumni_members"
  ]);
  Route::get("$module_name/print_member/{id}", [
    'as' => "$module_name.print_member",
    'uses' => "$controller_name@print_member"
  ]);
  // Route::get('$module_name/print_member/{id}', "$controller_name@print_member")
  // ->name("print_member");

  Route::resource("$module_name", "$controller_name");

  Route::post("$module_name/get_member", "$controller_name@get_member")->name("$module_name.get_member");


  Route::put('unpublished-member/{member}', "$controller_name@unpublished")->name("$module_name.unpublished");
  Route::put('published-member/{member}', "$controller_name@published")->name("$module_name.published");

  // Type of Members
  $module_name = 'member_types';
  $controller_name = 'MemberTypeController';
  Route::resource("$module_name", "$controller_name");
  Route::put('unpublished-type/{id}', "$controller_name@unpublished")->name("$module_name.unpublished");
  Route::put('published-type/{id}', "$controller_name@published")->name("$module_name.published");

  //Renowned Alumni Members
  $module_name = 'renowned_alumni_members';
  $controller_name = 'RenownedAlumniMembersController';
  Route::resource("$module_name", "$controller_name");

  Route::post("$module_name/update_re_alumni_member", [
    'as' => "$module_name.update_re_alumni_member",
    'uses' => "$controller_name@update_re_alumni_member"
  ]);

  Route::post("$module_name/get_re_alumni_member", [
    'as' => "$module_name.get_re_alumni_member",
    'uses' => "$controller_name@get_re_alumni_member"
  ]);

  Route::get('re-alumni-member-image/{id}', [
    'as' => 're_image.more', 
    'uses' => "$controller_name@renowned_alumni_members_image"
  ]);

  Route::post('/re-alumni-member-image-upload' , [
    'as' => 're_image.upload', 
    'uses' => "$controller_name@renowned_alumni_members_image_upload"
  ]);

});
