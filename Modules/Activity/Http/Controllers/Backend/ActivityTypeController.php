<?php

namespace Modules\Activity\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Activity\Entities\ActivityType;

use Auth;

class ActivityTypeController extends Controller
{

  public function __construct()
  {
    // Page Title
    $this->module_title   = 'Activity Type';

    // module name
    $this->module_name    = 'activity';

    // directory path of the module
    $this->module_path    = 'activity_types';

    // route path
    $this->route_path     = 'activitiy_types';

    // module icon
    $this->module_icon    = 'fas fa-tasks';

    // module model name, path
    $this->module_model   = "Modules\Activity\Entities\ActivityType";
  }

  /**
  * Display a listing of the resource.
  * @return Response
  */
  public function index()
  {

    $module_title   = $this->module_title;
    $module_name    = $this->module_name;
    $module_path    = $this->module_path;
    $route_path     = $this->route_path;
    $module_icon    = $this->module_icon;
    $module_model   = $this->module_model;

    $module_action  = 'List';


    $activitiy_types = $module_model::orderBy('id','desc')->get();

    return view("$module_name::backend.$module_path.index", compact(
      'activitiy_types',
      'route_path',
      'module_title',
      'module_action',
      'module_name',
      'module_icon'
    ));
  }

  /**
  * Show the form for creating a new resource.
  * @return Response
  */
  public function create()
  {

    $module_title   = $this->module_title;
    $module_name    = $this->module_name;
    $module_path    = $this->module_path;
    $route_path     = $this->route_path;
    $module_icon    = $this->module_icon;
    $module_model   = $this->module_model;

    $module_action  = 'Create';

    return view("activity::backend.activity_types.create", compact(
      'route_path',
      'module_title',
      'module_action',
      'module_name',
      'module_icon'
    ));

    // return view('activity::create');
  }

  /**
  * Store a newly created resource in storage.
  * @param Request $request
  * @return Response
  */
  public function store(Request $request)
  {
    $module_model = $this->module_model;
    $route_path = $this->route_path;


    $module_model::create([
      'name'                    => $request->name,
      'name_bn'                 => $request->name_bn,
      'created_by'              => Auth::user()->id,
      'updated_by'              => 0,
    ]);

    return redirect()->route("backend.$route_path.index")->with('success', "Activity Type Created Successfully!");
  }

  /**
  * Show the specified resource.
  * @param int $id
  * @return Response
  */
  public function show($id)
  {
    return view('activity::show');
  }

  /**
  * Show the form for editing the specified resource.
  * @param int $id
  * @return Response
  */
  public function edit($id)
  {
    $module_title   = $this->module_title;
    $module_name    = $this->module_name;
    $module_path    = $this->module_path;
    $module_icon    = $this->module_icon;
    $module_model   = $this->module_model;
    $route_path     = $this->route_path;

    $type           = $module_model::findOrFail($id);

    $module_action  = 'Update';

    return view("$module_name::backend.$module_path.edit", compact(
      'route_path',
      'type',
      'module_title',
      'module_action',
      'module_name',
      'module_icon'
    ));
  }

  /**
  * Update the specified resource in storage.
  * @param Request $request
  * @param int $id
  * @return Response
  */
  public function update(Request $request, $id)
  {

    $module_model = $this->module_model;
    $route_path = $this->route_path;

    $type =$module_model::findOrFail($id);

    $type->update([
      'name'                    => $request->name ? $request->name : $type->name,
      'name_bn'                 => $request->name_bn ? $request->name_bn : $type->name_bn,
      'updated_by'              => Auth::user()->id,
    ]);

    return redirect()->route("backend.$route_path.index")->with('success', 'Activity Type Updated Successfully');
  }

  public function published(ActivityType $type)
  {
    $route_path = $this->route_path;

    $type->update([
      'publication_status'      => 1,
      'updated_by'              => Auth::user()->id,
    ]);

    return redirect()->route("backend.$route_path.index")->with('success', 'Activity Type Updated Successfully');
  }

  public function unpublished(ActivityType $type)
  {
    $route_path = $this->route_path;

    $type->update([
      'publication_status'      => 0,
      'updated_by'              => Auth::user()->id,
    ]);

    return redirect()->route("backend.$route_path.index")->with('success', 'Activity Type Updated Successfully');
  }

  /**
  * Remove the specified resource from storage.
  * @param int $id
  * @return Response
  */
  public function destroy($id)
  {
    $module_model = $this->module_model;

    $type = $module_model::findOrFail($id);

    $type->delete();

    return back()->with('success','Deleted Successfully');
  }
}
