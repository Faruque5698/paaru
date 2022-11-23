<?php

namespace Modules\Slider\Http\Controllers\Backend;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Slider\Http\Requests\SliderRequest;

use Auth;
use File;

use Modules\Slider\Entities\Slider;
use Intervention\Image\Facades\Image;
class SliderController extends Controller
{

  public function __construct()
  {
    // Page Title
    $this->module_title   = 'Slider';

    // module name
    $this->module_name    = 'sliders';

    // module icon
    $this->module_icon    = 'fas fa-file-alt';

    // module model name, path
    $this->module_model   = "Modules\Slider\Entities\Slider";
  }

  /**
  * Display a listing of the resource.
  * @return Response
  */
  public function index()
  {

    $module_title   = $this->module_title;
    $module_name    = $this->module_name;
    $module_icon    = $this->module_icon;
    $module_model   = $this->module_model;

    $module_action  = 'List';

    $sliders        = $module_model::all();

    // dd($sliders[0]->users_created_by->name);
    // dd($sliders[0]->users_updated_by ? $sliders[0]->users_updated_by->name : 'NULL');

    return view('slider::backend.index',compact(
      'sliders',
      'module_title',
      'module_name',
      'module_icon',
      'module_model',
      'module_action'
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
    $module_icon    = $this->module_icon;
    $module_model   = $this->module_model;

    $module_action  = 'Create';

    return view('slider::backend.create',compact(
      'module_title',
      'module_name',
      'module_icon',
      'module_model',
      'module_action'
    ));
  }

  /**
  * Store a newly created resource in storage.
  * @param Request $request
  * @return Response
  */
  public function store(SliderRequest $request)
  {

    $module_model = $this->module_model;

    /*$photo = $request->file('photo');

    if ($request->file('photo')) {
    $fileName = time().'.'.$photo->getClientOriginalExtension();
    $move = $photo->move('assets/images/sliders/', $fileName);
  }*/
  if ($request->hasFile('photo')){
    $fileName = time().'.'.request()->file('photo')->getClientOriginalExtension();
    request()->file('photo')->move('assets/images/sliders/', $fileName);
    $image = Image::make("assets/images/sliders/"."{$fileName}")->resize(1920, 750);
    $image->save();
  }


  $module_model::create([
    'title'                   => $request->title,
    'first_slogan'            => $request->first_slogan,
    'second_slogan'           => $request->second_slogan,
    'created_by'              => Auth::user()->id,
    'photo'                   => isset($fileName) ? $fileName : '',
  ]);

  session()->flash('success', "Slider Created Successfully!");
  return redirect()->route('backend.sliders.index');

}

/**
* Show the specified resource.
* @param int $id
* @return Response
*/
public function show($id)
{
  return view('slider::show');
}

/**
* Show the form for editing the specified resource.
* @param int $id
* @return Response
*/
public function edit(Slider $slider)
{
  $module_title   = $this->module_title;
  $module_name    = $this->module_name;
  $module_icon    = 'fas fa-pen-square';
  $module_model   = $this->module_model;

  $module_action = 'Update';

  return view('slider::backend.edit', compact(
    'slider',
    'module_action',
    'module_title',
    'module_name',
    'module_icon',
    'module_model'
  ));
}

/**
* Update the specified resource in storage.
* @param Request $request
* @param int $id
* @return Response
*/
public function update(Request $request, Slider $slider)
{

  if ($request->hasFile('photo')){
    $fileName = time().'.'.request()->file('photo')->getClientOriginalExtension();
    request()->file('photo')->move('assets/images/sliders/', $fileName);
    $image = Image::make("assets/images/sliders/"."{$fileName}")->resize(1920, 750);
    $image->save();


    if(File::exists('assets/images/sliders/'.$slider->photo)){
      unlink('assets/images/sliders/'.$slider->photo);
    }

  }

  $slider->update([
    'title'                   => $request->title,
    'first_slogan'            => $request->first_slogan,
    'second_slogan'           => $request->second_slogan,
    'updated_by'              => Auth::user()->id,
    'photo'                   => isset($fileName) ? $fileName : $slider->photo,
  ]);

  session()->flash('success', 'Slider Updated Successfully');
  return redirect()->route('backend.sliders.index');
}

/**
* Remove the specified resource from storage.
* @param int $id
* @return Response
*/
public function destroy(Slider $slider)
{
  if(!empty($slider->photo)){

    if(File::exists('assets/images/sliders/'.$slider->photo)){
      unlink('assets/images/sliders/'.$slider->photo);
    }

  }

  $slider->delete();

  session()->flash('success','Deleted Successfully');
  return back();

}


public function unpublished(Slider $slider)
{

  $slider->update([
    'publication_status'   => 0,
    'updated_by'           => Auth::user()->id,
  ]);
  session()->flash('success', 'Slider Updated Successfully!!');
  return redirect()->back();

}

public function published(Slider $slider)
{

  $sliders = Slider::where(array('publication_status'=>1))->count();


  if($sliders < 4){
    $slider->update([
      'publication_status'   => 1,
      'updated_by'           => Auth::user()->id,
    ]);
    session()->flash('success', 'Slider Updated Successfully!!');
  }else{
    session()->flash('error', 'You can published only 4 sliders.');
  }

  return redirect()->back();
}

}
