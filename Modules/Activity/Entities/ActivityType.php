<?php

namespace Modules\Activity\Entities;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class ActivityType extends Model
{

  protected $fillable = [
    'name',
    'name_bn',
    'publication_status',
    'created_by',
    'updated_by',
  ];

  public function users_created_by()
  {
    return $this->hasOne(User::class,'id','created_by');;
  }
  public function users_updated_by()
  {
    return $this->hasOne(User::class,'id','updated_by');;
  }
}
