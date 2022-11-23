<?php
namespace Modules\Members\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Members\Entities\MemberType;

use Auth;

use App\District;
use App\Division;
use App\Thana;
use App\Union;

class MemberTypeController extends Controller
{

  public function __construct()
  {
    // Page Title
    $this->module_title   = 'Member Type';

    // module name
    $this->module_name    = 'members';

    // directory path of the module
    $this->module_path    = 'member_types';

    // route path
    $this->route_path     = 'member_types';

    // module icon
    $this->module_icon    = 'fas fa-file-alt';

    // module model name, path
    $this->module_model   = "Modules\Members\Entities\MemberType";

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
      'module_title',
      'module_action',
      'module_name',
      'module_icon',
      'types'
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

    $module_action = 'Save';

    return view("$module_name::backend.$module_path.create", compact(
      'route_path',
      'module_title',
      'module_action',
      'module_name',
      'module_icon'
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
    $route_path   = $this->route_path;


    $module_model::create([
      'name'                    => $request->name,
      'subcription_fee'         => $request->subcription_fee,
      'created_by'              => Auth::user()->id,
      'updated_by'              => 0,
    ]);

    session()->flash('success', "Member Type Created Successfully!");

    return redirect()->route("backend.$route_path.index");

  }

  /**
  * Show the specified resource.
  * @param int $id
  * @return Response
  */
  public function show($id)
  {
    return view('members::show');
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
    $route_path     = $this->route_path;
    $module_icon    = $this->module_icon;
    $module_model   = $this->module_model;

    $type = $module_model::findOrFail($id);

    $module_action = 'Update';

    return view("$module_name::backend.$module_path.edit", compact(
      'route_path',
      'type',
      'module_title',
      'module_action',
      'module_name',
      'module_icon'
    ));
  }

  public function unpublished($id)
  {
    $type = MemberType::findOrFail($id);

    $type->update([
      'publication_status'      => 0,
      'updated_by'              => Auth::user()->id,
    ]);

    session()->flash('success', 'Member Type Updated Successfully');

    return redirect()->route("backend.member_types.index");
  }

  public function published($id)
  {
    $type = MemberType::findOrFail($id);

    $type->update([
      'publication_status'      => 1,
      'updated_by'              => Auth::user()->id,
    ]);

    session()->flash('success', 'Member Type Updated Successfully');

    return redirect()->route("backend.member_types.index");
  }

  /**
  * Update the specified resource in storage.
  * @param Request $request
  * @param int $id
  * @return Response
  */
  public function update(Request $request, $id)
  {
    $type = MemberType::findOrFail($id);

    $type->update([
      'name'                    => $request->name,
      'subcription_fee'         => $request->subcription_fee,
      'updated_by'              => Auth::user()->id,
    ]);

    session()->flash('success', 'Member Type Updated Successfully');

    return redirect()->route("backend.member_types.index");
  }

  /**
  * Remove the specified resource from storage.
  * @param int $id
  * @return Response
  */
  public function destroy($id)
  {
    $type = MemberType::findOrFail($id);

    $type->delete();


    session()->flash('success','Deleted Successfully');

    return back();
  }
}
