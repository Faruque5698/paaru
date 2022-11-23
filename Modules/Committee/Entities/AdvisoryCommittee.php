<?php

namespace Modules\Committee\Entities;

use Illuminate\Database\Eloquent\Model;

use Modules\Members\Entities\Member;

use App\Models\User;

class AdvisoryCommittee extends Model
{
  protected $fillable = [
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
}
