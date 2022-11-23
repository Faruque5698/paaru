<?php

namespace Modules\AboutUs\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\AboutUs\Entities\AboutUs;
use Modules\AboutUs\Entities\PMessages;

use Modules\Committee\Entities\CommitteeTypes;

use Modules\Committee\Entities\AdvisoryCommittee;


class FrontendAboutUsController extends Controller
{
  public function __construct()
  {
    // Page Title
    $this->module_title = 'AboutUs';

    // module name
    $this->module_name = 'aboutus';

    // directory path of the module
    $this->module_path = 'aboutus';

    // module icon
    $this->module_icon = 'fas fa-file-alt';

    // module model name, path
    $this->module_model = "Modules\AboutUs\Entities\AboutUs";
  }

  public function about()
  {
    return view('aboutus::frontend.about');
  }

  public function presidentMessage()
  {
    $pm_messages = PMessages::first();
    $member = CommitteeTypes::findOrFail(1)->members;

    $ps_member = NULL;

    if($member->count() > 0){
      $ps_member = CommitteeTypes::findOrFail(1)->members[0];
    }
    return view('aboutus::frontend.president_message',compact('pm_messages','ps_member'));
  }

  public function executiveCommittee()
  {
    $committe_types = CommitteeTypes::where(array('publication_status'=>1))->orderBy('id','asc')->get();

    return view('aboutus::frontend.executive_committee', compact('committe_types'));
  }

  public function advisoryCommittee()
  {
    $advisory_committees = AdvisoryCommittee::latest()->get();
    return view('aboutus::frontend.advisory_committee',compact('advisory_committees'));
  }
  public function constitution()
  {
    return view('aboutus::frontend.constitution');
  }
}
