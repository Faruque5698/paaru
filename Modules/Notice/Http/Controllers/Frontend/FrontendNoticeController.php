<?php

namespace Modules\Notice\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Notice\Entities\Notice;

class FrontendNoticeController extends Controller
{
  public function __construct()
  {
    // Page Title
    $this->module_title = 'Notice';

    // module name
    $this->module_name = 'notice';

    // directory path of the module
    $this->module_path = 'notice';

    // module icon
    $this->module_icon = 'fas fa-file-alt';

    // module model name, path
    $this->module_model = "Modules\Notice\Entities\Notice";
  }

  public function noticeList()
  {
    $notices = Notice::where('publication_status',1)->get();
    return view('notice::frontend.notice_list',compact('notices'));
  }
  public function getSingleNotice(Request $request)
  {
    return response()->json(Notice::findOrFail($request->id));
  }
}
