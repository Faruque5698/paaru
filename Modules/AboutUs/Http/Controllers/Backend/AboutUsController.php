<?php

namespace Modules\AboutUs\Http\Controllers\Backend;

use Modules\AboutUs\Http\Requests\AboutUsRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\AboutUs\Entities\AboutUs;
use Modules\AboutUs\Entities\PMessages;
use Modules\Committee\Entities\Committee;
use Modules\Committee\Entities\CommitteeTypes;
use Modules\Members\Entities\Member;

use Modules\ContactUs\Entities\Contact;

use Auth;
use File;

use Intervention\Image\Facades\Image;

class AboutUsController extends Controller
{

  public function __construct()
  {
    // Page Title
    $this->module_title   = 'AboutUs';

    // module name
    $this->module_name    = 'aboutus';

    // directory path of the module
    $this->module_path    = 'aboutus';

    // route path
    $this->route_path     = 'aboutus';

    // module icon
    $this->module_icon    = 'fas fa-user';

    // module model name, path
    $this->module_model   = "Modules\AboutUs\Entities\AboutUs";
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

    $about_us       = $module_model::all();

    return view("$module_name::backend.$route_path.index", compact(
      'about_us',
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
    $module_path    = $this->module_path;
    // $module_model = $this->module_model;

    $module_action = 'Save';

    return view("$module_name::backend.$route_path.create", compact(
      'module_path',
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
  public function store(AboutUsRequest $request)
  {
    $module_model = $this->module_model;
    $route_path   = $this->route_path;
    /*

    */
    if($module_model::where('publication_status',1)->count() < 1){
      // $photo = $request->file('image');

      if ($request->hasFile('image')){
        $imageName = time().'.'.request()->file('image')->getClientOriginalExtension();
        request()->file('image')->move('assets/images/aboutus/', $imageName);
        $image = Image::make("assets/images/aboutus/"."{$imageName}")->resize(800, 468);
        $image->save();

      }
      dd($request->image);

      // if ($request->file('image')) {
      // $fileName = time().'.'.$photo->getClientOriginalExtension();
      // $move = $photo->move('assets/images/aboutus/', $imageName);
      // }

      $about_us = $module_model::create([
        'name'                   => $request->name,
        'slogan'                 => $request->slogan,
        'about_bls'              => $request->about_bls,
        'activity_name'          => $request->activity_name,
        'activity_message'       => $request->activity_message,
        'image'                  => isset($imageName) ? $imageName : '',
        'created_by'             => Auth::user()->id,
      ]);

      session()->flash('success', "AboutUs Created Successfully!");

      return redirect()->route("backend.$route_path.index");
    }else{
      session()->flash('error','Already have one. you can edit it.');
      return redirect()->route("backend.$route_path.index");
    }

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
    $module_title   = $this->module_title;
    $module_name    = $this->module_name;
    $module_path    = $this->module_path;
    $module_icon    = $this->module_icon;
    $module_model   = $this->module_model;
    $route_path     = $this->route_path;

    $module_action = 'Update';

    $about_us = $module_model::findOrFail($id);

    return view("$module_name::backend.$module_path.edit",compact(
      'module_name',
      'about_us',
      'route_path',
      'module_title',
      'module_path',
      'module_icon',
      'module_model',
      'module_action'
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

    $about_us = $module_model::findOrFail($id);

    if ($request->hasFile('image')){
      $imageName = time().'.'.request()->file('image')->getClientOriginalExtension();
      request()->file('image')->move('assets/images/aboutus/', $imageName);
      $image = Image::make("assets/images/aboutus/"."{$imageName}")->resize(800, 468);
      $image->save();

      // }

      // $photo = $request->file('image');

      // if ($request->file('image')) {

      // $fileName = time().'.'.$photo->getClientOriginalExtension();
      // $move = $photo->move('assets/images/aboutus/', $fileName);

      if(File::exists('assets/images/aboutus/'.$about_us->image)){
        unlink('assets/images/aboutus/'.$about_us->image);
      }
    }

    $about_us->update([
      'name'                   => $request->name,
      'slogan'                 => $request->slogan,
      'about_bls'              => $request->about_bls,
      'activity_name'          => $request->activity_name,
      'activity_message'       => $request->activity_message,
      'image'                  => isset($imageName) ? $imageName : $about_us->image,
      'updated_by'              => Auth::user()->id,
    ]);

    session()->flash('success', 'AboutUs Updated Successfully');

    return redirect()->route("backend.$route_path.index");
  }

  /**
  * Remove the specified resource from storage.
  * @param int $id
  * @return Response
  */
  public function destroy($id)
  {
    $about_us = AboutUs::findOrFail($id);
    if(!empty($about_us->image)){

      if(File::exists('assets/images/aboutus/'.$about_us->image)){
        unlink('assets/images/aboutus/'.$about_us->image);
      }

    }

    $about_us->delete();

    session()->flash('success','Deleted Successfully');


    return back();
  }


  public function deleteMessage($id)
  {
    $contact = Contact::findOrFail($id);

    $contact->delete();

    session()->flash('success','Deleted Successfully');

    return back();
  }

}