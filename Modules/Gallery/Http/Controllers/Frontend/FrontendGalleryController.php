<?php

namespace Modules\Gallery\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Gallery\Entities\Gallery;
use Modules\Gallery\Entities\GalleryImage;

class FrontendGalleryController extends Controller
{
    public function gallary()
  {
    $galleries = Gallery::orderBy('updated_at', 'desc')->get();
    return view('gallery::frontend.gallary', compact('galleries'));
  }

  public function galleryDetails(Gallery $gallery)
  {
    return view('gallery::frontend.gallary_details', compact('gallery'));
  }
}
