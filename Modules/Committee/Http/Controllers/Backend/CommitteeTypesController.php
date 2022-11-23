<?php

namespace Modules\Committee\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Auth;
use Modules\Committee\Entities\CommitteeTypes;

class CommitteeTypesController extends Controller
{

  public function __construct()
  {
    // Page Title
    $this->module_title = 'Committee Types';

    // module name
    $this->module_name  = 'committee';

    // directory path of the module
    $this->module_path  = 'committee_types';

    // module icon
    $this->module_icon  = 'fas fa-types';

    // module model name, path
    $this->module_model = "Modules\Committee\Entities\CommitteeTypes";
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
    $module_icon    = $this->module_icon;
    $module_model   = $this->module_model;

    $module_action  = 'List';

    $types = $module_model::all();

    return view("$module_name::backend.$module_path.index", compact(
      'types',
      'module_title',
      'module_action',
      'module_name',
      'module_icon',
      'module_path'
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
    $module_icon    = $this->module_icon;

    $module_action  = 'Create';


    return view("$module_name::backend.$module_path.create", compact(
      'module_title',
      'module_action',
      'module_name',
      'module_icon',
      'module_path'
    ));
  }

  /**
  * Store a newly created resource in storage.
  * @param Request $request
  * @return Response
  */
  public function store(Request $request)
  {
    $module_name  = $this->module_name;
    $module_model = $this->module_model;
    $module_path  = $this->module_path;

    $module_model::create([
      'name'                    => $request->name,
      'publication_status'      => $request->publication_status,
      'created_by'              => Auth::user()->id,
      'updated_by'              => 0,
    ]);

    session()->flash('success', "CommitteTypes Created Successfully!");

    return redirect()->route("backend.$module_path.index");

  }

  /**
  * Show the specified resource.
  * @param int $id
  * @return Response
  */
  public function show($id)
  {
    return view('committee::show');
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

    $module_action = 'Update';


    $type = $module_model::findOrFail($id);

    return view("$module_name::backend.$module_path.edit", compact(
      'type',
      'module_path',
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
    $module_path  = $this->module_path;

    $type = $module_model::findOrFail($id);

    $type->update([
      'name'                    => $request->name,
      'publication_status'      => $request->publication_status,
      'updated_by'              => Auth::user()->id,
    ]);

    session()->flash('success', 'CommitteeTypes Updated Successfully');

    return redirect()->route("backend.$module_path.index");
  }

  public function unpublished($id)
  {

    $module_model = $this->module_model;
    $module_path = $this->module_path;

    $type = $module_model::findOrFail($id);

    $type->update([
      'publication_status'      => 0,
      'updated_by'              => Auth::user()->id,
    ]);

    session()->flash('success', 'CommitteTypes Updated Successfully');

    return redirect()->route("backend.$module_path.index");
  }

  public function published($id)
  {
    $module_model = $this->module_model;
    $module_path  = $this->module_path;

    $type = $module_model::findOrFail($id);

    $type->update([
      'publication_status'      => 1,
      'updated_by'              => Auth::user()->id,
    ]);

    session()->flash('success', 'Member Type Updated Successfully');

    return redirect()->route("backend.$module_path.index");
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

    session()->flash('success','Deleted Successfully');

    return back();
  }
}
