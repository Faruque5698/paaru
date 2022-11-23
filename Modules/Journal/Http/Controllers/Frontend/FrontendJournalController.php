<?php

namespace Modules\Journal\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Journal\Entities\Journal;

class FrontendJournalController extends Controller
{
  public function __construct()
  {
    // Page Title
    $this->module_title = 'Journal';

    // module name
    $this->module_name = 'journal';

    // directory path of the module
    $this->module_path = 'journal';

    // module icon
    $this->module_icon = 'fas fa-file-alt';

    // module model name, path
    $this->module_model = "Modules\Journal\Entities\Journal";
  }


  public function journalList()
  {
    $journals           = Journal::where('publication_status', 1)->orderBy('publication_date','desc')->paginate(10);
    $all_journal_years  = Journal::distinct()->where(array('publication_status'=>1))->orderBy('year','desc')->get(['year']);
    $all_journals       = Journal::where('publication_status', 1)->get();
    $total              = $all_journal_years->count();

    return view('journal::frontend.journal_list', compact(
      'total',
      'journals',
      'all_journal_years',
      'all_journals'
    ));
  }
  public function journalDetails($id)
  {
    $journal = Journal::findOrFail($id);
    return view('journal::frontend.journal_details',compact('journal'));
  }

  public function journalMonthwise($publication_date)
  {

    $year               = date("Y",strtotime($publication_date));
    $month              = date("m",strtotime($publication_date));
    $full_month_name    = date("F",strtotime($publication_date));

    $journals_monthwise = Journal::where(array('publication_status'=>1))
    ->orderBy('publication_date','desc')
    ->whereYear('publication_date', $year)
    ->whereMonth('publication_date', $month)
    ->get();

    return view('journal::frontend.journal_monthwise',compact(
      'journals_monthwise',
      'year',
      'full_month_name'
    ));
  }
}
