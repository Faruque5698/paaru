<?php

namespace Modules\Members\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Members\Entities\Member;
use Modules\Members\Entities\RenownedAlumniMembers;
use Modules\Members\Entities\RenownedAlumniMembersMoreImage;
use Auth;

class RenownedAlumniMembersController extends Controller
{
  public function __construct()
  {
    // Page Title
    $this->module_title   = 'Renowned Alumni Member';

    // module name
    $this->module_name    = 'members';

    // directory path of the module
    $this->module_path    = 're_alumni_members';

    $this->route_path     = 'renowned_alumni_members';

    // module icon
    $this->module_icon    = 'fas fa-users';

    // module model name, path
    $this->module_model = "Modules\Members\Entities\RenownedAlumniMembers";
  }
  /**
  * Display a listing of the resource.
  * @return Response
  */
  public function index()
  {
    $module_title   = $this->module_title;
    $module_name    = $this->module_name;
    $module_path    = $this->module_path;
    $module_icon    = $this->module_icon;
    $module_model   = $this->module_model;
    $route_path     = $this->route_path;

    $module_action  = 'List';
    $re_alumni_members = $module_model::latest()->get();

    // dd($re_alumni_members);

    // dd($re_alumni_members[1]->getRenownedAlumnious);

    return view("$module_name::backend.$module_path.index", compact(
      'module_title',
      'module_action',
      'module_name',
      'module_icon',
      'route_path',
      're_alumni_members'
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
    $module_path    = $this->module_path;
    $module_icon    = $this->module_icon;
    $module_model   = $this->module_model;
    $route_path     = $this->route_path;

    $module_action = 'Create';

    // get existing alumnous members
    $existing_alumnous_members = $module_model::pluck('member_id');

    // get members
    $members = Member::where(array('publication_status'=>1))
    ->whereNotIn('id', $existing_alumnous_members)
    ->latest()->get();


    return view("$module_name::backend.$module_path.create", compact(
      'members',
      'route_path',
      'module_title',
      'module_action',
      'module_name',
      'module_icon',
      'module_path'
    ));
  }

  /**
  * Store a newly created resource in storage.
  * @param Request $request
  * @return Response
  */
  public function store(Request $request)
  {

    $module_path    = $this->module_path;
    $module_model   = $this->module_model;

    if ($request->video_link) {

      $search = 'youtube';

      if(preg_match("/{$search}/i", $request->video_link)){
        $video_link = preg_replace(
          "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
          "<iframe width=\"100%\" height=\"315\" src=\"//www.youtube.com/embed/$2\" allowfullscreen></iframe>",
          $request->video_link
        );
      }else {
        $str = preg_replace('/\D/', '', $request->video_link);

        $video_link = '<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FFunnyLaughingWorld%2Fvideos%2F'.$str.'%2F&show_text=0&width=317" width="100%" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
          ';
        }

      }

      $created = RenownedAlumniMembers::create([
        'member_id'             => $request->member_id,
        're_al_member_content'  => $request->re_al_member_content,
        're_al_member_msg'      => $request->re_al_member_msg,
        'video_link'            => $video_link,
        'created_by'            => Auth::user()->id,
        'updated_by'            => 0,
      ]);



      session()->flash('success', 'Renowned Alumni Members Successfully Created!!');

      return response()->json($created);
    }

    /**
    * Show the specified resource.
    * @param int $id
    * @return Response
    */
    public function show($id)
    {
      return view('members::show');
    }

    /**
    * Show the form for editing the specified resource.
    * @param int $id
    * @return Response
    */
    public function edit($id)
    {
      $module_title   = $this->module_title;
      $module_name    = $this->module_name;
      $module_path    = $this->module_path;
      $module_icon    = $this->module_icon;
      $module_model   = $this->module_model;
      $route_path     = $this->route_path;

      $module_action = 'Update';

      // get existing alumnous members
      $existing_alumnous_members = $module_model::pluck('member_id');

      // get members
      $members = Member::where(array('publication_status'=>1))
      ->whereNotIn('id', $existing_alumnous_members)
      ->latest()->get();


      //Get previous member of that committee
      $single_member = Member::findOrFail($id);

      // Get Renowned Alumni Member for edit according to member id
      $re_alumni_members = $module_model::where('member_id',$id)->firstOrFail();

      return view("$module_name::backend.$module_path.edit", compact(
        'single_member',
        'members',
        're_alumni_members',
        'module_title',
        'route_path',
        'module_action',
        'module_name',
        'module_icon',
        'module_path'
      ));
    }

    public function update_re_alumni_member(Request $request)
    {

      $re_alumni_members = RenownedAlumniMembers::findOrFail($request->re_alumni_members_id);

      if ($request->video_link) {

        $search = 'youtube';

        if(preg_match("/{$search}/i", $request->video_link)){
          $video_link = preg_replace(
            "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
            "<iframe width=\"100%\" height=\"315\" src=\"//www.youtube.com/embed/$2\" allowfullscreen></iframe>",
            $request->video_link
          );
        }else {
          $str = preg_replace('/\D/', '', $request->video_link);

          $video_link = '<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FFunnyLaughingWorld%2Fvideos%2F'.$str.'%2F&show_text=0&width=317" width="100%" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
            ';
          }

        }else {
          $video_link = $re_alumni_members->video_link;
        }

        $updated = $re_alumni_members->update([
          'member_id'               => $request->member_id,
          're_al_member_content'    => $request->re_al_member_content,
          're_al_member_msg'        => $request->re_al_member_msg,
          'video_link'              => $video_link,
        ]);

        session()->flash('success', 'Renowned Alumni Members Successfully Updated!!');

        return response()->json($updated);
      }

      // ajax request
      public function get_re_alumni_member(Request $request)
      {
        $member = Member::findOrFail($request->member_id);
        $member->renownedalumnious = $member->renownedalumnious;

        return response()->json($member);
      }


      /**
      * Update the specified resource in storage.
      * @param Request $request
      * @param int $id
      * @return Response
      */
      public function update(Request $request, $id)
      {
        //
      }

      public function renowned_alumni_members_image($id)
      {
        $module_title   = $this->module_title;
        $module_name    = $this->module_name;
        $module_icon    = $this->module_icon;
        $module_model   = $this->module_model;
        $module_path    = $this->module_path;
        $module_action  ="More Image";
        $re_alumni_members = RenownedAlumniMembers::findOrFail($id);
        // dd($re_alumni_members);
        return view("$module_name::backend.$module_path.moreImage", compact(
          'module_path',
          'module_title',
          'module_model',
          'module_name',
          'module_icon',
          'module_action',
          're_alumni_members'
        ));
      }

      public function renowned_alumni_members_image_upload (Request $request)
      {
        // dd($request);

        $imgName = time().'.'.request()->file->getClientOriginalName();
        $photos = new RenownedAlumniMembersMoreImage();
        $photos->re_alumni_member_id  = request()->input('renownedAlumniMembersMoreImage');
        $photos->re_members_more_image = $imgName;
        $photos->save();

        request()->file->move('assets/images/re-alumni-member-image/', $imgName);
        return response()->json(['uploaded' => '/re-alumni-member-image/'.$imgName]);

      }


      /**
      * Remove the specified resource from storage.
      * @param int $id
      * @return Response
      */
      public function destroy($id)
      {
        $re_alumni_members = RenownedAlumniMembers::findOrFail($id);
        $re_alumni_members->delete();
        session()->flash('success','Deleted Successfully');
        return back();
      }
    }
