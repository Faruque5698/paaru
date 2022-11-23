<?php

namespace Modules\Committee\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Members\Entities\Member;
use Modules\Committee\Entities\Committee;

use Modules\Committee\Entities\AdvisoryCommittee;


use Auth;


class AdvisoryCommitteeController extends Controller
{

  public function __construct()
  {
    // Page Title
    $this->module_title   = 'Advisory Committee';

    // module name
    $this->module_name    = 'committee';

    // directory path of the module
    $this->module_path    = 'advisory';

    $this->route_path     = 'advisory_committee';

    // module icon
    $this->module_icon    = 'fas fa-users';

    // module model name, path
    $this->module_model   = "Modules\Committee\Entities\AdvisoryCommittee";
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
    $route_path     = $this->route_path;

    $module_action  = 'List';

    $advisory_committees = $module_model::latest()->get();

    return view("$module_name::backend.$module_path.index", compact(
      'advisory_committees',
      'module_title',
      'route_path',
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
    $module_title = $this->module_title;
    $module_name = $this->module_name;
    $module_path = $this->module_path;
    $module_icon = $this->module_icon;
    $module_model = $this->module_model;
    $route_path = $this->route_path;

    $module_action = 'Crteate';

    // get already advisory committee members
    $existing_advisory_committee_members = $module_model::pluck('member_id');

    // get already executive members
    $existing_executive_committee_members = Committee::pluck('member_id');

    // get members where are not included any committee
    $members = Member::where(array('publication_status'=>1))
    ->whereNotIn('id', $existing_advisory_committee_members)
    ->whereNotIn('id', $existing_executive_committee_members)->get();

    return view("$module_name::backend.$module_path.create", compact(
      'members',
      'route_path',
      'module_title',
      'module_action',
      'module_name',
      'module_icon',
      'module_path'
    ));

    // return view('committee::create');
  }

  /**
  * Store a newly created resource in storage.
  * @param Request $request
  * @return Response
  */
  public function store(Request $request)
  {

    $module_path = $this->module_path;
    $module_model = $this->module_model;

    $created = $module_model::create([
      'member_id'      => $request->member_id,
      'created_by'     => Auth::user()->id,
      'updated_by'     => 0,
    ]);



    session()->flash('success', 'Advisory Committee Successfully Created!!');

    return response()->json($created);

    //
    // return $request->all();
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

    $module_title = $this->module_title;
    $module_name = $this->module_name;
    $module_path = $this->module_path;
    $module_icon = $this->module_icon;
    $module_model = $this->module_model;
    $route_path = $this->route_path;

    $module_action = 'Update';

    // get already advisory committee members
    $existing_advisory_committee_members = $module_model::pluck('member_id');

    // get already executive members
    $existing_executive_committee_members = Committee::pluck('member_id');

    // get members where are not included any committee
    $members = Member::where(array('publication_status'=>1))
    ->whereNotIn('id', $existing_advisory_committee_members)
    ->whereNotIn('id', $existing_executive_committee_members)->get();


    //Get previous member of that committee
    $single_member = Member::findOrFail($id);


    // Get Committee for edit according to member id
    $advisory_committee = $module_model::where('member_id',$id)->firstOrFail();

    return view("$module_name::backend.$module_path.edit", compact(
      'single_member',
      'members',
      'advisory_committee',
      'module_title',
      'route_path',
      'module_action',
      'module_name',
      'module_icon',
      'module_path'
    ));


    // return view('committee::edit');
  }

  /**
  * Update the specified resource in storage.
  * @param Request $request
  * @param int $id
  * @return Response
  */
  public function update(Request $request, $id)
  {

  }

  /**
  * Remove the specified resource from storage.
  * @param int $id
  * @return Response
  */
  public function destroy($id)
  {
    $advisory_committee = AdvisoryCommittee::findOrFail($id);
    $advisory_committee->delete();
    return back()->with('success','Deleted Successfully');
  }

  public function update_advisory_committee(Request $request)
  {

    $advisory_committee = AdvisoryCommittee::findOrFail($request->committee_id);

    $updated = $advisory_committee->update([
      'member_id'  => $request->member_id,
    ]);

    session()->flash('success', 'Advisory Committee Successfully Updated!!');

    return response()->json($updated);
  }
}
