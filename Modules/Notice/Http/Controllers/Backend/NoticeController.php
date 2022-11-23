<?php

namespace Modules\Notice\Http\Controllers\Backend;

use Modules\Notice\Http\Requests\NoticeValidation;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Notice\Entities\Notice;
use Flash;

use Auth;
use File;

class NoticeController extends Controller
{

  public function __construct()
  {
    // Page Title
    $this->module_title   = 'Notice';

    // module name
    $this->module_name    = 'notice';

    // directory path of the module
    $this->module_path    = 'notice';

    // module icon
    $this->module_icon    = 'fas fa-bell';

    // module model name, path
    $this->module_model   = "Modules\Notice\Entities\Notice";
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

    $notices        = $module_model::orderBy('id','desc')->get();

    // return view('journal::index');
    return view("$module_name::backend.$module_path.index", compact(
      'notices',
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
  public function store(NoticeValidation $request)
  {
    $module_model = $this->module_model;
    $module_name  = $this->module_name;


    $pdf_file     = $request->file('pdf_file');

    if ($request->file('pdf_file')) {
      $fileName = time().'.'.$pdf_file->getClientOriginalExtension();
      $move = $pdf_file->move('assets/pdf/notices/', $fileName);
    }


    $module_model::create([
      'title'                   => $request->title,
      'date_time'               => $request->date_time,
      'created_by'              => Auth::user()->id,
      'pdf_file'                => isset($fileName) ? $fileName : '',
    ]);

    /* For Use Sweet alert */
    session()->flash('success', "Notice Created Successfully!");

    return redirect()->route("backend.$module_name.index");
  }

  /**
  * Show the specified resource.
  * @param int $id
  * @return Response
  */
  public function show($id)
  {
    return view('notice::show');
  }

  /**
  * Show the form for editing the specified resource.
  * @param int $id
  * @return Response
  */
  public function edit(Notice $notice)
  {
    $module_title = $this->module_title;
    $module_name = $this->module_name;
    $module_icon = $this->module_icon;
    $module_model = $this->module_model;

    $module_action = 'Update';

    return view("$module_name::backend.$module_name.edit", compact(
      'notice',
      'module_action',
      'module_title',
      'module_name',
      'module_icon',
      'module_model'
    ));
  }

  /**
  * Update the specified resource in storage.
  * @param Request $request
  * @param int $id
  * @return Response
  */
  public function update(Request $request, Notice $notice)
  {
    $module_name = $this->module_name;

    $pdf_file = $request->file('pdf_file');

    if($request->file('pdf_file'))
    {
      $fileName = time().'.'.$pdf_file->getClientOriginalExtension(); // renaming file
      $move = $pdf_file->move('assets/pdf/notices/', $fileName);

      if(File::exists('assets/pdf/notices/'.$notice->pdf_file)){
        unlink('assets/pdf/notices/'.$notice->pdf_file);
      }

    }

    $notice->update([
      'title'                   => $request->title,
      'date_time'               => $request->date_time,
      'pdf_file'                => isset($fileName) ? $fileName : $notice->pdf_file,
      'updated_by'              => Auth::user()->id,
    ]);

    session()->flash('success', "Notice Update Successfully!");
    return redirect()->route("backend.$module_name.index");
  }

  public function published(Notice $notice)
  {
    $notice->update([
      'publication_status'   => 1,
      'updated_by'           => Auth::user()->id,
    ]);
    session()->flash('success', "Notice Published Successfully!");

    return redirect()->back();
  }

  public function unpublished(Notice $notice)
  {
    $notice->update([
      'publication_status'   => 0,
      'updated_by'           => Auth::user()->id,
    ]);
    session()->flash('success', "Notice Unpublished Successfully!");

    return redirect()->back();
  }

  /**
  * Remove the specified resource from storage.
  * @param int $id
  * @return Response
  */
  public function destroy(Notice $notice)
  {
    if(!empty($notice->pdf_file)){

      if(File::exists('assets/pdf/notices/'.$notice->pdf_file)){
        unlink('assets/pdf/notices/'.$notice->pdf_file);
      }

    }

    $notice->delete();
    session()->flash('success', "Notice Deleted Successfully!");
    return back();
  }
}
