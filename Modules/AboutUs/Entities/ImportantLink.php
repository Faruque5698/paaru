<?php

namespace Modules\AboutUs\Entities;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class ImportantLink extends Model
{
  protected $guarded = [
    'id',
    'created_at',
    'updated_at'
  ];

  public function users_created_by()
  {
    return $this->hasOne(User::class,'id','created_by');
  }
  public function users_updated_by()
  {
    return $this->hasOne(User::class,'id','updated_by');
  }
}
