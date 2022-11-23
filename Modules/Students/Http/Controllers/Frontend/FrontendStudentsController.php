<?php

namespace Modules\Students\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Members\Entities\Students;

class FrontendStudentsController extends Controller
{
    public function studentList()
    {
        return view('students::frontend.students_list');
    }

}
