<?php

namespace Modules\ContactUs\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\ContactUs\Entities\ContactUs;

use Modules\ContactUs\Entities\Contact;

use Auth;

class ContactUsController extends Controller
{

  public function __construct()
  {
    // Page Title
    $this->module_title   = 'ContactUs';

    // module name
    $this->module_name    = 'contactus';

    // directory path of the module
    $this->module_path    = 'contactus';

    // route path
    $this->route_path     = 'contactus';

    // module icon
    $this->module_icon    = 'fas fa-address-book';

    // module model name, path
    $this->module_model   = "Modules\ContactUs\Entities\ContactUs";
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

    $contacts = $module_model::all();


    return view("$module_name::backend.$route_path.index", compact(
      'contacts',
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
    $module_title   = $this->module_title;
    $module_name    = $this->module_name;
    $route_path     = $this->route_path;
    $module_icon    = $this->module_icon;
    // $module_model = $this->module_model;

    $module_action = 'Create';


    return view("$module_name::backend.$route_path.create", compact(
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
    $module_model = $this->module_model;
    $route_path = $this->route_path;

    $contact_us = $module_model::create([
      'mobile'            => $request->mobile,
      'phone'             => $request->phone,
      'email'             => $request->email,
      'mail'              => $request->mail,
      'place'             => $request->place,
      'location'          => $request->location,
      'geo_location'      => $request->geo_location,
      'created_by'        => Auth::user()->id,
    ]);


    return redirect()->route("backend.$route_path.index")->with('success', "Contact Created Successfully!");
  }

  /**
  * Show the specified resource.
  * @param int $id
  * @return Response
  */
  public function show($id)
  {
    return view('contactus::show');
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

    $contact        = $module_model::findOrFail($id);

    $module_action = 'Update';

    return view("$module_name::backend.$module_path.edit",compact(
      'contact',
      'module_name',
      'route_path',
      'module_title',
      'module_path',
      'module_icon',
      'module_model',
      'module_action'
    ));

  }

  public function messages()
  {

    $module_title = 'Messages';

    $module_path    = $this->module_path;
    $module_name    = $this->module_name;
    $route_path     = $this->route_path;
    $module_icon    = 'fas fa-envelope';

    $module_action  = 'List';

    $messages       = Contact::orderBy('id','desc')->get();

    return view("$module_name::backend.messages.message", compact(
      'messages',
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

    $route_path = $this->route_path;
    $module_model = $this->module_model;

    $contact = $module_model::findOrFail($id);

    $contact->update([
      'mobile'            => $request->mobile ? $request->mobile : $contact->mobile,
      'phone'             => $request->phone ? $request->phone : $contact->phone,
      'email'             => $request->email ? $request->email : $contact->email,
      'mail'              => $request->mail ? $request->mail : $contact->mail,
      'place'             => $request->place ? $request->place : $contact->place,
      'location'          => $request->location ? $request->location : $contact->location,
      'geo_location'      => $request->geo_location ? $request->geo_location : $contact->geo_location,
      'updated_by'        => Auth::user()->id,
    ]);

    return redirect()->route("backend.$route_path.index")->with('success', 'Contact Updated Successfully');
  }

  public function unpublished(ContactUs $contact)
  {

    $route_path = $this->route_path;

    $contact->update([
      'publication_status'      => 0,
      'updated_by'              => Auth::user()->id,
    ]);

    return redirect()->route("backend.$route_path.index")->with('success', 'Contact Unpublished Successfully');
  }

  public function published(ContactUs $contact)
  {
    $module_model = $this->module_model;
    $route_path = $this->route_path;

    $contact_us = $module_model::where('publication_status',1)->get();

    if($contact_us->count() > 0){
      return redirect()->route("backend.$route_path.index")->with('error', 'Please unpublished one first!');
    }else{

      $contact->update([
        'publication_status'      => 1,
        'updated_by'              => Auth::user()->id,
      ]);

      return redirect()->route("backend.$route_path.index")->with('success', 'Contact Published Successfully');
    }
  }

  /**
  * Remove the specified resource from storage.
  * @param int $id
  * @return Response
  */
  public function destroy($id)
  {
    $module_model   = $this->module_model;
    $route_path     = $this->route_path;

    $contact = $module_model::findOrFail($id);

    if($contact->publication_status == 1){
      return redirect()->route("backend.$route_path.index")->with('error', 'Please unpublished one first!');
    }else{
      $contact->delete();
      return redirect()->route("backend.$route_path.index")->with('success', 'Contact Deleted Successfully');
    }
  }

}
