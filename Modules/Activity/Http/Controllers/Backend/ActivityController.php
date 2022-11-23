<?php

namespace Modules\Activity\Http\Controllers\Backend;

use Modules\Activity\Http\Requests\ActivityRequest;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Activity\Entities\Activity;
use Modules\Activity\Entities\ActivityType;

use Auth;
use File;
use Intervention\Image\Facades\Image;

class ActivityController extends Controller
{

  public function __construct()
  {
    // Page Title
    $this->module_title = 'Activity';

    // module name
    $this->module_name = 'activity';

    // directory path of the module
    $this->module_path = 'activities';

    // route path
    $this->route_path = 'activities';

    // module icon
    $this->module_icon = 'fas fa-tasks';

    // module model name, path
    $this->module_model = "Modules\Activity\Entities\Activity";
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


    $activities = $module_model::orderBy('id','desc')->get();

    // dd($activities);


    return view("$module_name::backend.$route_path.index", compact('activities','module_path','route_path','module_title','module_action','module_name','module_icon'));

    // return view('activity::index');
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

    $types          = ActivityType::all();

    return view("activity::backend.activities.create", compact(
      'types',
      'module_path',
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
  public function store(ActivityRequest $request)
  {
    $module_model = $this->module_model;
    $route_path = $this->route_path;

/*    $photo = $request->file('image');

    if ($request->file('image')) {
      $fileName = time().'.'.$photo->getClientOriginalExtension();
      $move = $photo->move('assets/images/activities/', $fileName);
    }
*/
    if ($request->hasFile('image')){ 
      $imageName = time().'.'.request()->file('image')->getClientOriginalExtension();
      request()->file('image')->move('assets/images/activities/', $imageName);
      $image = Image::make("assets/images/activities/"."{$imageName}")->resize(800, 480);
      $image->save();
    }


    $activities = $module_model::create([
      'title'                   => $request->title,
      'description'             => $request->description,
      'date_time'               => $request->date_time,
      'activity_type'           => $request->activity_type,
      'image'                   => isset($imageName) ? $imageName : '',
      'created_by'              => Auth::user()->id,
    ]);


    return redirect()->route("backend.$route_path.index")->with('success', "Activity Created Successfully!");
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

    $module_action = 'Update';

    $types         = ActivityType::all();

    $activity       = $module_model::findOrFail($id);


    return view("$module_name::backend.$module_path.edit",compact(
      'module_name',
      'activity',
      'route_path',
      'types',
      'module_title',
      'module_path',
      'module_icon',
      'module_model',
      'module_action'
    ));
  }

  public function published(Activity $activity)
  {
    $route_path = $this->route_path;

    $activity->update([
      'publication_status'      => 1,
      'updated_by'              => Auth::user()->id,
    ]);

    return redirect()->route("backend.$route_path.index")->with('success', 'Activity Updated Successfully');
  }

  public function unpublished(Activity $activity)
  {

    $route_path = $this->route_path;

    $activity->update([
      'publication_status'      => 0,
      'updated_by'              => Auth::user()->id,
    ]);

    return redirect()->route("backend.$route_path.index")->with('success', 'Activity Updated Successfully');

  }

  /**
  * Update the specified resource in storage.
  * @param Request $request
  * @param int $id
  * @return Response
  */
  public function update(Request $request, Activity $activity)
  {
    $route_path = $this->route_path;
    $module_path = $this->module_path;


    /*$photo = $request->file('image');

    if ($request->file('image')) {

      $fileName = time().'.'.$photo->getClientOriginalExtension();
      $move = $photo->move('assets/images/activities/', $fileName);
*/  if ($request->hasFile('image')){ 
      $imageName = time().'.'.request()->file('image')->getClientOriginalExtension();
      request()->file('image')->move('assets/images/activities/', $imageName);
      $image = Image::make("assets/images/activities/"."{$imageName}")->resize(800, 480);
      $image->save();

      if(File::exists('assets/images/activities/'.$activity->image)){
        unlink('assets/images/activities/'.$activity->image);
      }
    }

    $activity->update([
      'title'                   => $request->title,
      'description'             => $request->description,
      'date_time'               => $request->date_time,
      'activity_type'           => $request->activity_type ? $request->activity_type : $activity->activity_type,
      'image'                   => isset($imageName) ? $imageName : $activity->image,
      'updated_by'              => Auth::user()->id,
    ]);

    return redirect()->route("backend.$route_path.index")->with('success', 'Member Updated Successfully');
  }

  /**
  * Remove the specified resource from storage.
  * @param int $id
  * @return Response
  */
  public function destroy(Activity $activity)
  {
    if(!empty($activity->image)){

      if(File::exists('assets/images/activities/'.$activity->image)){
        unlink('assets/images/activities/'.$activity->image);
      }

    }

    $activity->delete();

    $activity->update([
      'deleted_by'              => Auth::user()->id,
    ]);

    return back()->with('success','Deleted Successfully');
  }
}
