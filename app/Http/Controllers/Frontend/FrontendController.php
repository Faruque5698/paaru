<?php

namespace App\Http\Controllers\Frontend;
use Modules\Activity\Entities\Activity;
use Modules\Activity\Entities\ActivityType;


use App\Http\Controllers\Controller;

class FrontendController extends Controller
{

    public function index()
    {
        $body_class = '';

        return view('frontend.pages.index', compact('body_class'));
    }

    public function profile()
    {
        $body_class = 'profile-page';

        return view('frontend.profile', compact('body_class'));
    }
}
