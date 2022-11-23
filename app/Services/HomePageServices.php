<?php

namespace App\Services;

use Modules\Slider\Entities\Slider;
use Modules\Activity\Entities\Activity;
use Modules\Event\Entities\Event;
use Modules\AboutUs\Entities\AboutUs;
use Modules\Members\Entities\Member;

use Modules\Gallery\Entities\Gallery;
use Modules\Gallery\Entities\GalleryImage;
use Modules\Members\Entities\MemberType;

class HomePageServices
{
  public function member_types()
  {
    return MemberType::where('publication_status',1)->get();
  }
  // Home Page four slider
  public function four_slider() {
    return Slider::where('publication_status',1)->take(4)->get();
  }

  // Home Page activities
  public function activities()
  {
    return Activity::where(array('publication_status'=>1,'deleted_by'=>NULL))->latest()->take(6)->get();
  }

  // Home page upcoming events
  public function events()
  {
    return Event::where(array('publication_status'=>1,'deleted_by'=>NULL))->latest()->take(4)->get();
  }

  public function about_us()
  {
    //Always First id send
    return AboutUs::first();
  }

  public function recentImage()
  {
    return GalleryImage::latest()->take(9)->get();
  }

}
