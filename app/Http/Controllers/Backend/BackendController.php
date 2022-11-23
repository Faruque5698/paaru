<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Modules\Members\Entities\Member;

use Modules\Committee\Entities\CommitteeTypes;
use Modules\Committee\Entities\AdvisoryCommittee;

class BackendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.index');
    }
}
