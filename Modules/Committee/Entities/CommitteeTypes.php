<?php

namespace Modules\Committee\Entities;

use Illuminate\Database\Eloquent\Model;

use Modules\Members\Entities\Member;

use Modules\Committee\Entities\Committee;

use App\Models\User;

class CommitteeTypes extends Model
{
  protected $fillable = [
    'name',
    'publication_status',
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

  public function members()
  {
    return $this->belongsToMany(Member::class,'committees','type_id','member_id');
  }

}
