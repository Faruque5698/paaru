<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Flash;
use Log;

class PermissionController extends Controller
{

  public function __construct()
  {
    // Page Title
    $this->module_title = 'Permissions';

    // module name
    $this->module_name = 'permissions';

    // directory path of the module
    $this->module_path = 'permissions';

    // module icon
    $this->module_icon = 'icon-lock';

    // module model name, path
    $this->module_model = "App\Models\Permission";
  }

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {

    $module_title = $this->module_title;
    $module_name = $this->module_name;
    $module_path = $this->module_path;
    $module_icon = $this->module_icon;
    $module_model = $this->module_model;
    $module_name_singular = str_singular($module_name);

    $module_action = 'List';

    $$module_name = $module_model::latest()->get();

    Log::info(label_case($module_title.' '.$module_action).' | User:'.auth()->user()->name.'(ID:'.auth()->user()->id.')');

    return view("backend.$module_path.index",
    compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_name_singular', 'module_action'));


    // return view('backend.permissions.index','permissions');
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $module_title = $this->module_title;
    $module_name = $this->module_name;
    $module_path = $this->module_path;
    $module_icon = $this->module_icon;
    $module_model = $this->module_model;
    $module_name_singular = str_singular($module_name);

    $module_action = 'Create';

    Log::info(label_case($module_title.' '.$module_action).' | User:'.auth()->user()->name.'(ID:'.auth()->user()->id.')');

    return view("backend.$module_name.create", compact('module_name', 'module_icon', 'module_action'));
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param \Illuminate\Http\Request $request
  *
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {
    $module_title = $this->module_title;
    $module_name = $this->module_name;
    $module_path = $this->module_path;
    $module_icon = $this->module_icon;
    $module_model = $this->module_model;

    $module_action = 'Store';

    $permission = new Permission();

    $permission->name = $request->name;
    $permission->guard_name = 'web';

    $permission->save();


    Flash::success('Permission successfully Created!')->important();

    Log::info(label_case($module_title.' '.$module_action).' | User:'.auth()->user()->name.'(ID:'.auth()->user()->id.')');

    return redirect("admin/$module_name")->with('flash_success', "$module_name added!");
  }

  /**
  * Display the specified resource.
  *
  * @param \App\Permission $permission
  *
  * @return \Illuminate\Http\Response
  */
  public function show(Permission $permission)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param \App\Permission $permission
  *
  * @return \Illuminate\Http\Response
  */
  public function edit(Permission $permission)
  {
    $module_title = $this->module_title;
    $module_name = $this->module_name;
    $module_path = $this->module_path;
    $module_icon = $this->module_icon;
    $module_model = $this->module_model;

    $module_action = 'Edit';

    Log::info(label_case($module_title.' '.$module_action).' | User:'.auth()->user()->name.'(ID:'.auth()->user()->id.')');

    return view("backend.$module_name.edit", compact('module_name', 'module_icon', 'module_action', 'permission'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param \Illuminate\Http\Request $request
  * @param \App\Permission          $permission
  *
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    $module_title = $this->module_title;
    $module_name = $this->module_name;
    $module_path = $this->module_path;
    $module_icon = $this->module_icon;
    $module_model = $this->module_model;

    $module_action = 'Update';

    $permission = $module_model::findOrFail($id);

    $permission->name = $request->name;

    $permission->save();

    Flash::success('Permission successfully Updated!')->important();

    Log::info(label_case($module_title.' '.$module_action).' | User:'.auth()->user()->name.'(ID:'.auth()->user()->id.')');

    return redirect("admin/$module_name");
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param \App\Permission $permission
  *
  * @return \Illuminate\Http\Response
  */
  public function destroy(Permission $permission)
  {

    $module_title = $this->module_title;
    $module_name = $this->module_name;
    $module_path = $this->module_path;
    $module_icon = $this->module_icon;
    $module_model = $this->module_model;

    $module_action = 'Destroy';

    if(count($permission->roles) == 0){

      $permission->delete();

      Flash::success('Permission successfully deleted!')->important();

      Log::info(label_case($module_title.' '.$module_action).' | User:'.auth()->user()->name.'(ID:'.auth()->user()->id.')');

      return redirect()->back();

    }else {
      Flash::warning("<i class='fas fa-exclamation-triangle'></i> You can not delete this permission.
      Because ".$permission->name." has ".count($permission->roles)." roles.")->important();

      Log::notice(label_case($module_title.' '.$module_action).' Failed | User:'.auth()->user()->name.'(ID:'.auth()->user()->id.')');

      return redirect()->route("backend.$module_name.index");
    }
  }
}
