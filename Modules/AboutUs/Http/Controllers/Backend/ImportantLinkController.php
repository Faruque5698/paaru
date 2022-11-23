<?php

namespace Modules\AboutUs\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\AboutUs\Entities\ImportantLink;

use Modules\AboutUs\Http\Requests\LinkRequest;

use Auth;

class ImportantLinkController extends Controller
{
  public function __construct()
  {
    // Page Title
    $this->module_title   = 'Important Link';

    // module name
    $this->module_name    = 'aboutus';

    // directory path of the module
    $this->module_path    = 'links';

    // route path
    $this->route_path     = 'links';

    // module icon
    $this->module_icon    = 'fas fa-link';

    // module model name, path
    $this->module_model   = "Modules\AboutUs\Entities\ImportantLink";
  }


  /**
  * Display a listing of the resource.
  * @return Response
  */
  public function index()
  {
    $module_title        = $this->module_title;
    $module_name         = $this->module_name;
    $module_path         = $this->module_path;
    $route_path          = $this->route_path;
    $module_icon         = $this->module_icon;
    $module_model        = $this->module_model;

    $module_action       = 'List';

    $module_model_value  = $module_model::all();

    return view("$module_name::backend.$module_path.index", compact(
      'module_model_value',
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

    $module_action = 'Create';

    return view("$module_name::backend.$module_path.create", compact(
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
  public function store(LinkRequest $request)
  {
    $module_model = $this->module_model;
    $route_path   = $this->route_path;

    $module_model_value = $module_model::create([
      'title'       => $request->title,
      'url'         => $request->url,
      'created_by'  => Auth::user()->id
    ]);

    session()->flash('success', "Important Link Created Successfully!");

    return redirect()->route("backend.$route_path.index");
  }

  /**
  * Show the specified resource.
  * @param int $id
  * @return Response
  */
  public function show($id)
  {
    dd('come');
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

    $module_model_value = $module_model::findOrFail($id);

    return view("$module_name::backend.$module_path.edit",compact(
      'module_name',
      'module_model_value',
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
  public function update(LinkRequest $request, $id)
  {
    $route_path   = $this->route_path;
    $module_path  = $this->module_path;
    $module_model = $this->module_model;

    $module_model_value = $module_model::findOrFail($id);

    $module_model_value->update([
      'title'       => $request->title ? $request->title : $module_model_value->title,
      'url'         => $request->url ? $request->url : $module_model_value->url,
      'updated_by'  => Auth::user()->id,
    ]);


    session()->flash('success', "Important link Updated Successfully!");

    return redirect()->route("backend.$route_path.index");
  }


  public function published(ImportantLink $link)
  {
    $route_path   = $this->route_path;

    $link->update([
      'publication_status'   => 1,
      'updated_by'           => Auth::user()->id,
    ]);

    session()->flash('success', "Important link Published Successfully!");


    return redirect()->route("backend.$route_path.index");
  }

  public function unpublished(ImportantLink $link)
  {
    $route_path   = $this->route_path;

    $link->update([
      'publication_status'   => 0,
      'updated_by'           => Auth::user()->id,
    ]);

    session()->flash('success', "Important link Unpublished Successfully!");


    return redirect()->route("backend.$route_path.index");

  }

  /**
  * Remove the specified resource from storage.
  * @param int $id
  * @return Response
  */
  public function destroy($id)
  {
    $module_model = $this->module_model;

    $module_model_value = $module_model::findOrFail($id);

    $module_model_value->delete();

    session()->flash('success', "Important Link Deleted Successfully!");

    return back();
  }
}
