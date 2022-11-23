<?php

namespace Modules\Activity\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Activity\Entities\Activity;
use Modules\Activity\Entities\ActivityType;

class FrontendActivityController extends Controller
{
  public function __construct()
  {
    // Page Title
    $this->module_title = 'Activity';

    // module name
    $this->module_name = 'activity';

    // directory path of the module
    $this->module_path = 'activity';

    // module icon
    $this->module_icon = 'fas fa-file-alt';

    // module model name, path
    $this->module_model = "Modules\Activity\Entities\Activity";
  }

  public function activityList()
  {
    $activities = Activity::where(array('publication_status'=>1,'deleted_by'=>NULL))->latest()->paginate(6);
    return view('activity::frontend.activities.activity_list',compact('activities'));
  }
  public function activityDetails($id)
  {
    $activity = Activity::findOrFail($id);
    return view('activity::frontend.activities.activity_details',compact('activity'));
  }

}
