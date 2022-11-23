<?php

namespace Modules\Gallery\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Gallery\Entities\Gallery;
use Modules\Gallery\Entities\GalleryImage;

use Auth;
use File;
use Intervention\Image\Facades\Image;
class GalleryController extends Controller
{

  public function __construct()
  {
    // Page Title
    $this->module_title   = 'Gallery';

    // module name
    $this->module_name    = 'gallery';

    // directory path of the module
    $this->module_path    = 'gallery';

    // module icon
    $this->module_icon    = 'far fa-image';

    // module model name, path
    $this->module_model   = "Modules\Gallery\Entities\Gallery";
  }

  /**
  * Display a listing of the resource.
  * @return Response
  */
  public function index()
  {
    $module_title   = $this->module_title;
    $module_name    = $this->module_name;
    $module_icon    = $this->module_icon;
    $module_model   = $this->module_model;
    $module_path    = $this->module_path;

    $module_action  = 'List';

    $galleries = $module_model::orderBy('id','desc')->get();

    return view("$module_name::backend.$module_path.index", compact(
      'galleries',
      'module_title',
      'module_name',
      'module_icon',
      'module_model',
      'module_action'
    ));
  }

  /**
  * Show the form for creating a new resource.
  * @return Response
  */
  public function create()
  {
    $module_title   = $this->module_title;
    $module_name    = $this->module_name;
    $module_icon    = $this->module_icon;
    $module_model   = $this->module_model;
    $module_path    = $this->module_path;

    $module_action = 'Create';

    return view("$module_name::backend.$module_path.create", compact(
      'module_path',
      'module_title',
      'module_model',
      'module_name',
      'module_icon',
      'module_action'
    ));
  }

  /**
  * Store a newly created resource in storage.
  * @param Request $request
  * @return Response
  */
  public function store(Request $request)
  {
    $module_model = $this->module_model;
    $module_name = $this->module_name;

    $data = $request->all();
    $data['created_by'] = Auth::user()->id;
    // $photo = $request->file('cover_img');
    // if ($request->file('cover_img')) {
    //   $fileName = time().'.'.$photo->getClientOriginalExtension();
    //   $move = $photo->move('assets/images/gallery/', $fileName);
    //   $data['cover_img'] = $fileName;
    // }
    if ($request->hasFile('cover_img')){
      $imageName = time().'.'.request()->file('cover_img')->getClientOriginalExtension();
      request()->file('cover_img')->move('assets/images/gallery/', $imageName);
      // $image = Image::make("assets/images/gallery/"."{$imageName}")->resize(350, 350);
      // $image->save();
      $data['cover_img'] = $imageName;
    }
    $g = $module_model::create($data);
    if($g)
    {
      $more = route("backend.gallery.more", $g->id);
      $index = route("backend.gallery.index");
      echo '<script>
      var r = confirm("Add more Image ...!");
      if (r == true) {
        location.replace("'.$more.'");
      } else {
        location.replace("'.$index.'");
      }
      </script>';
    }
  }

  /**
  * Show the specified resource.
  * @param int $id
  * @return Response
  */
  public function show(Gallery $gallery)
  {
    $module_title   = $this->module_title;
    $module_name    = $this->module_name;
    $module_icon    = $this->module_icon;
    $module_model   = $this->module_model;
    $module_path    = $this->module_path;

    $module_action = 'View';

    return view("$module_name::backend.$module_path.show", compact(
      'module_path',
      'module_title',
      'module_model',
      'module_name',
      'module_icon',
      'module_action',
      'gallery'
    ));
  }

  /**
  * Show the form for editing the specified resource.
  * @param int $id
  * @return Response
  */
  public function edit(Gallery $gallery)
  {
    $module_title   = $this->module_title;
    $module_name    = $this->module_name;
    $module_icon    = $this->module_icon;
    $module_model   = $this->module_model;
    $module_path    = $this->module_path;

    $module_action = 'Update';

    return view("$module_name::backend.$module_path.edit", compact(
      'module_path',
      'module_title',
      'module_model',
      'module_name',
      'module_icon',
      'module_action',
      'gallery'
    ));
  }

  /**
  * Update the specified resource in storage.
  * @param Request $request
  * @param int $id
  * @return Response
  */
  public function update(Request $request, Gallery $gallery)
  {
    $module_model   = $this->module_model;
    $module_name    = $this->module_name;
    $module_path    = $this->module_path;

    $data   = $request->all();
    $photo  = $request->file('cover_img');
    if ($request->file('cover_img')) {
      $fileName = time().'.'.$photo->getClientOriginalExtension();
      $move = $photo->move('assets/images/gallery/', $fileName);
      $data['cover_img'] = $fileName;
    }
    $gallery->update($data);
    return redirect()->route("backend.gallery.index")->with('success', 'Gallery Updated Successfully');
  }

  /**
  * Remove the specified resource from storage.
  * @param int $id
  * @return Response
  */


  public function galleryMore(Gallery $gallery)
  {
    $module_title   = $this->module_title;
    $module_name    = $this->module_name;
    $module_icon    = $this->module_icon;
    $module_model   = $this->module_model;
    $module_path    = $this->module_path;
    $module_action  ="More Image";
    return view("$module_name::backend.$module_path.moreImage", compact(
      'module_path',
      'module_title',
      'module_model',
      'module_name',
      'module_icon',
      'module_action',
      'gallery'
    ));
  }

  public function published(Gallery $gallery)
  {
    $gallery->update([
      'status'   => 1,
      'updated_by'           => Auth::user()->id,
    ]);

    return redirect()->back()->with('success', 'Gallery Published Successfully!!');
  }

  public function unpublished(Gallery $gallery)
  {
    $gallery->update([
      'status'   => 0,
      'updated_by'           => Auth::user()->id,
    ]);

    return redirect()->back()->with('success', 'Gallery Published Successfully!!');
  }

  /**
  * Remove the specified resource from storage.
  * @param int $id
  * @return Response
  */
  public function destroy(Gallery $gallery)
  {
    if(!empty($gallery->cover_img)){

      if(File::exists('assets/images/gallery/'.$gallery->cover_img)){
        unlink('assets/images/gallery/'.$gallery->cover_img);
      }

    }

    $gallery->delete();

    return back()->with('success','Deleted Successfully');
  }

  public function galleryImagedestroy(GalleryImage $galleryImage)
  {
    if(!empty($galleryImage->image_path)){

      if(File::exists('assets/images/photo-gallery/'.$galleryImage->image_path)){
        unlink('assets/images/photo-gallery/'.$galleryImage->image_path);
      }

    }

    $galleryImage->delete();

    return back()->with('success','Deleted Successfully');
  }

  public function galleryImageUpload (Request $request)
  {

    $imgName = time().'.'.request()->file->getClientOriginalName();
    $photos = new GalleryImage();
    $photos->gallery_id  = request()->input('gallery');
    $photos->image_path = $imgName;
    $photos->save();

    request()->file->move('assets/images/photo-gallery/', $imgName);
    return response()->json(['uploaded' => '/photo-gallery/'.$imgName]);
    
  }
}
