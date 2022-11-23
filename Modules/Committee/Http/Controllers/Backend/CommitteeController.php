<?php

namespace Modules\Committee\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Committee\Entities\Committee;
use Modules\Committee\Entities\CommitteeTypes;
use Modules\Members\Entities\Member;
use Modules\Committee\Entities\AdvisoryCommittee;

use Devfaysal\BangladeshGeocode\Models\District;


use Auth;

class CommitteeController extends Controller
{

  public function __construct()
  {
    // Page Title
    $this->module_title   = 'Executive Committee';

    // module name
    $this->module_name    = 'committee';

    // directory path of the module
    $this->module_path    = 'committees';

    // module icon
    $this->module_icon    = 'fas fa-users';

    // module model name, path
    $this->module_model   = "Modules\Committee\Entities\Committee";
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

    $committe_types = CommitteeTypes::where(array('publication_status'=>1))->orderBy('id','asc')->get();

    return view("$module_name::backend.$module_path.index", compact(
      'committe_types',
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
    $module_model   = $this->module_model;

    $module_action  = 'Create';

    $c_types = CommitteeTypes::where('publication_status',1)->get();

    // get already executive committee members
    $existing_committee_members = Committee::pluck('member_id');

    // get already advisory committee members
    $existing_advisory_committee_members = AdvisoryCommittee::pluck('member_id');

    $members = Member::where(array('publication_status'=>1))
    ->whereNotIn('id', $existing_committee_members)
    ->whereNotIn('id', $existing_advisory_committee_members)
    ->get();

    $types = array();

    foreach ($c_types as $key => $c_type) {
      $types[$c_type->id] = $c_type->name;
    }

    $districts = District::all();


    return view("$module_name::backend.$module_path.create", compact(
      'districts',
      'c_types',
      'members',
      'types',
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

    // $committee_type_id = $request->type_id;

    $module_path = $this->module_path;
    $module_model = $this->module_model;

    // $committees = $module_model::findOrFail($committee_type_id);

    $created = $module_model::create([
      'type_id'        => $request->type_id,
      'member_id'      => $request->member_id,
      'created_by'     => Auth::user()->id,
      'updated_by'     => 0,
    ]);



    session()->flash('success', 'Committee Successfully Created!!');

    return response()->json($created);

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
  // Here i receive the member id and get according committee
  public function edit($id)
  {

    $module_title   = $this->module_title;
    $module_name    = $this->module_name;
    $module_path    = $this->module_path;
    $module_icon    = $this->module_icon;
    $module_model   = $this->module_model;

    $module_action  = 'Update';

    // get all published CommitteTypes
    $c_types = CommitteeTypes::where('publication_status',1)->get();


    // This array for storing committe_types data as id and name only for select dropdown
    $committe_types = array();

    foreach ($c_types as $key => $c_type) {
      $committe_types[$c_type->id] = $c_type->name;
    }



    // Get members who are already in a committee
    $existing_committee_members = Committee::pluck('member_id');

    // get already advisory committee members
    $existing_advisory_committee_members = AdvisoryCommittee::pluck('member_id');

    // get all members which are not in any committee
    $members = Member::where(array('publication_status'=>1))
    ->whereNotIn('id',$existing_committee_members)
    ->whereNotIn('id',$existing_advisory_committee_members)
    ->get();

    //Get previous member of that committee
    $single_member = Member::findOrFail($id);

    // Get Committee for edit according to member id
    $committee = $module_model::where('member_id',$id)->firstOrFail();

    return view("$module_name::backend.$module_path.edit", compact(
      'single_member',
      'members',
      'committee',
      'committe_types',
      'module_title',
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
    //
  }

  /**
  * Remove the specified resource from storage.
  * @param int $id
  * @return Response
  */
  public function destroy($id)
  {
    $committee = Committee::where('member_id', $id)->get();

    // dd($committee);

    $committee->each->delete();

    return back()->with('success','Deleted Successfully');

  }

  // ajax request
  public function get_single_member(Request $request)
  {
    return response()->json(Member::findOrFail($request->member_id));
  }

  public function update_committee(Request $request)
  {
    $module_path = $this->module_path;
    $module_model = $this->module_model;

    $committee = $module_model::findOrFail($request->committee_id);

    $updated = $committee->update([
      'member_id'      => $request->member_id,
    ]);

    session()->flash('success', 'Committee Successfully Updated!!');

    return response()->json($updated);
  }

  public function committe_check(Request $request)
  {
    $committee = Committee::where('type_id',$request->type_id)->get();

    $result = false;

    if($committee->count() > 0){
      $result = true;
    }else{
      $result = false;
    }
    return response()->json($result);
  }

}
