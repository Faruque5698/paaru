<?php

namespace Modules\AboutUs\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\AboutUs\Entities\AboutUs;
use Modules\AboutUs\Entities\PMessages;
use Modules\Committee\Entities\Committee;
use Modules\Committee\Entities\CommitteeTypes;
use Modules\Members\Entities\Member;

use App\Models\Contact;

use Auth;
use File;


class PMessageController extends Controller
{

  public function __construct()
  {
    // Page Title
    $this->module_title = 'President Message';

    // module name
    $this->module_name = 'aboutus';

    // directory path of the module
    $this->module_path = 'messages';

    // route path
    $this->route_path = 'pmmessages';

    // module icon
    $this->module_icon = 'fas fa-user';

    // module model name, path
    $this->module_model = "Modules\AboutUs\Entities\PMessages";
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

    $module_action = 'List';

    $messages = $module_model::all();

    $president_member = CommitteeTypes::findOrFail(1)->members;

    $ps_member = NULL;

    if($president_member->count() > 0){
      $ps_member = CommitteeTypes::findOrFail(1)->members[0];
    }

    return view("$module_name::backend.$module_path.index", compact(
      'ps_member',
      'messages',
      'module_path',
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
    dd('ok');
    return view('aboutus::create');
  }

  /**
  * Store a newly created resource in storage.
  * @param Request $request
  * @return Response
  */
  public function store(Request $request)
  {
    //
  }

  /**
  * Show the specified resource.
  * @param int $id
  * @return Response
  */
  public function show($id)
  {
    return view('aboutus::show');
  }

  /**
  * Show the form for editing the specified resource.
  * @param int $id
  * @return Response
  */
  public function edit($id)
  {
    $module_title = 'Message';

    $module_path  = $this->module_path;
    $module_name  = $this->module_name;
    $route_path   = $this->route_path;
    $module_model = $this->module_model;
    $module_icon  = 'fas fa-envelope';

    $module_action = 'Update';

    $messages = $module_model::all();

    $p_message = PMessages::findOrFail($id);

    if($id == 2){
      $id = 3;
    }

    $member_message = CommitteeTypes::findOrFail($id)->members;

    if($member_message->count() > 0){
      $member = CommitteeTypes::findOrFail($id)->members[0];
    }else{
      session()->flash('error', 'Committee Not Created Yet!');
      return redirect()->route("backend.$route_path.index");
    }


    return view("$module_name::backend.messages.president_message", compact(
      'member',
      'p_message',
      'route_path',
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
    $route_path   = $this->route_path;
    $module_path  = $this->module_path;
    $module_model = $this->module_model;

    $message = $module_model::findOrFail($id);

    $message->update([
      'message'            => $request->message,
    ]);

    session()->flash('success', 'Message Updated Successfully');
    return redirect()->route("backend.$route_path.index");

  }

  /**
  * Remove the specified resource from storage.
  * @param int $id
  * @return Response
  */
  public function destroy($id)
  {
    //
  }
}
