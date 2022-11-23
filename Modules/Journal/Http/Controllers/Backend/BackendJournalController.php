<?php

namespace Modules\Journal\Http\Controllers\Backend;

use Modules\Journal\Http\Requests\JournalValidation;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Journal\Entities\Journal;

use Auth;
use File;

class BackendJournalController extends Controller
{

  public function __construct()
  {
    // Page Title
    $this->module_title = 'Journal';

    // module name
    $this->module_name = 'journals';

    // directory path of the module
    // $this->module_path = 'journals';

    // module icon
    $this->module_icon = 'fas fa-newspaper';

    // module model name, path
    $this->module_model = "Modules\Journal\Entities\Journal";
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

    $module_action = 'List';

    $journals = $module_model::latest()->get();

    // return view('journal::index');
    return view('journal::backend.index', compact(
      'module_title',
      'module_name',
      'module_icon',
      'module_model',
      'journals',
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

    $module_action = 'Create';

    return view('journal::backend.create', compact(
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
  public function store(JournalValidation $request)
  {

    $module_model = $this->module_model;
    $module_name = $this->module_name;


    $pdf_file = $request->file('pdf_file');

    if ($request->file('pdf_file')) {
      $fileName = time().'.'.$pdf_file->getClientOriginalExtension();
      $move = $pdf_file->move('assets/pdf/journals/', $fileName);
    }


    $module_model::create([
      'authors'                 => $request->authors,
      'title'                   => $request->title,
      'keywords'                => $request->keywords,
      'abstract'                => $request->abstract,
      'publication_date'        => $request->publication_date,
      'year'                    => date("Y",strtotime($request->publication_date)),
      'created_by'              => Auth::user()->id,
      'pdf_file'                => isset($fileName) ? $fileName : '',
    ]);

    return redirect()->route("backend.$module_name.index")->with('success', "Journal Created Successfully!");

  }

  public function unpublished(Journal $journal)
  {
    $journal->update([
      'publication_status'   => 0,
    ]);

    return redirect()->back()->with('success', 'Journal Published Successfully!!');
  }

  public function published(Journal $journal)
  {
    $journal->update([
      'publication_status'   => 1,
      'updated_by'           => Auth::user()->id,
    ]);

    return redirect()->back()->with('success', 'Journal Published Successfully!!');
  }

  /**
  * Show the specified resource.
  * @param int $id
  * @return Response
  */
  public function show($id)
  {
    return view('journal::show');
  }

  /**
  * Show the form for editing the specified resource.
  * @param int $id
  * @return Response
  */
  public function edit(Journal $journal)
  {
    $module_title = $this->module_title;
    $module_name = $this->module_name;
    $module_icon = $this->module_icon;
    $module_model = $this->module_model;

    $module_action = 'Update';

    return view('journal::backend.edit', compact(
      'journal',
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
  public function update(Request $request, Journal $journal)
  {
    $module_name = $this->module_name;

    $pdf_file = $request->file('pdf_file');

    if($request->file('pdf_file'))
    {
      $fileName = time().'.'.$pdf_file->getClientOriginalExtension(); // renaming file
      $move = $pdf_file->move('assets/pdf/journals/', $fileName);

      if(File::exists('assets/pdf/journals/'.$journal->pdf_file)){
        unlink('assets/pdf/journals/'.$journal->pdf_file);
      }

    }

    $journal->update([
      'authors'                 => $request->authors,
      'title'                   => $request->title,
      'keywords'                => $request->keywords,
      'publication_date'        => $request->publication_date ? $request->publication_date : $journal->publication_date,
      'year'                    => date("Y",strtotime($request->publication_date)),
      'abstract'                => $request->abstract,
      'pdf_file'                => isset($fileName) ? $fileName : $journal->pdf_file,
    ]);

    return redirect()->route("backend.$module_name.index")->with('success', 'Journal Updated Successfully');
  }

  /**
  * Remove the specified resource from storage.
  * @param int $id
  * @return Response
  */
  public function destroy(Journal $journal)
  {
    if(!empty($journal->pdf_file)){

      if(File::exists('assets/pdf/journals/'.$journal->pdf_file)){
        unlink('assets/pdf/journals/'.$journal->pdf_file);
      }

    }

    $journal->delete();

    return back()->with('success','Deleted Successfully');
  }
}
