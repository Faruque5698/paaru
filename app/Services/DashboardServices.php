<?php
namespace App\Services;

use Modules\Members\Entities\Member;
use Modules\Committee\Entities\CommitteeTypes;
use Modules\Committee\Entities\AdvisoryCommittee;
use Modules\Notice\Entities\Notice;
use Modules\Journal\Entities\Journal;
use Modules\Committee\Entities\Committee;

use Modules\AboutUs\Entities\ImportantLink;

class DashboardServices
{
    
  public function important_links()
  {
    return ImportantLink::where(array('publication_status'=>1))->latest()->get();
  }

  public function count_total_member()
  {
    return Member::all()->count();
  }
  public function life_time_member()
  {
    return Member::where(array('cat_of_member'=>3, 'publication_status'=>1))->count();
  }
  public function alumni_member()
  {
    return Member::where(array('cat_of_member'=>2, 'publication_status'=>1))->count();
  }
  public function total_committee()
  {
    return CommitteeTypes::where('publication_status',1)->count();
  }

  public function advisory_committee()
  {
    return AdvisoryCommittee::all()->count();
  }
  public function executive_committee()
  {
    $executive_committee = Committee::all();
    $executive_members = array();
    foreach ($executive_committee as $key => $com) {
        $executive_members[$key++] = $com->member;
      }
    return count($executive_members);
  }
  public function total_notice()
  {
    return Notice::where(array('publication_status'=>1))->count();
  }
  public function pending_total_notice()
  {
    return Notice::where(array('publication_status'=>0))->count();
  }
  public function total_journal()
  {
    return Journal::where(array('publication_status'=>1))->count();
  }

}
