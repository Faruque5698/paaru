<?php

namespace Modules\FuturePlane\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\FuturePlane\Entities\FuturePlane;

class FrontendFuturePlaneController extends Controller
{
     public function __construct()
    {
        // Page Title
        $this->module_title = 'FuturePlane';

        // module name
        $this->module_name = 'futureplane';

        // directory path of the module
        $this->module_path = 'futureplane';

        // module icon
        $this->module_icon = 'fas fa-file-alt';

        // module model name, path
        $this->module_model = "Modules\FuturePlane\Entities\FuturePlane";
    }

    public function futurePlaneList()
    {
        return view('futureplane::frontend.futureplane_list');
    }

}
