<?php

namespace Modules\Activity\Entities;

use Illuminate\Database\Eloquent\Model;

use Modules\Activity\Entities\ActivityType;

use App\Models\User;

use Illuminate\Database\Eloquent\SoftDeletes;

class Activity extends Model
{

  use SoftDeletes;

  protected $fillable = [
    'title',
    'description',
    'date_time',
    'image',
    'activity_type',
    'publication_status',
    'created_by',
    'updated_by',
    'deleted_by',
  ];

  public function users_created_by()
  {
    return $this->hasOne(User::class,'id','created_by');
  }
  public function users_updated_by()
  {
    return $this->hasOne(User::class,'id','updated_by');
  }

  public function types()
  {
    return $this->hasOne(ActivityType::class,'id','activity_type');
  }
}
