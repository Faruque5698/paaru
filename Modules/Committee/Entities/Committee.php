<?php

namespace Modules\Committee\Entities;

use Illuminate\Database\Eloquent\Model;

use Modules\Committee\Entities\CommitteeTypes;
use Modules\Members\Entities\Member;

use App\Models\User;

class Committee extends Model
{
  protected $fillable = [
    'type_id',
    'member_id',
    'order',
    'created_by',
    'updated_by',
  ];

  public function users_created_by()
  {
    return $this->hasOne(User::class,'id','created_by');
  }
  public function users_updated_by()
  {
    return $this->hasOne(User::class,'id','updated_by');
  }

  public function member()
  {
    return $this->hasOne(Member::class,'id','member_id');
  }
  
  // Executive Committee that belong to which committee types
  public function executive_committee_type()
  {
    return $this->hasOne(CommitteeTypes::class,'id','type_id');
  }

}
