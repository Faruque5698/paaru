<?php

namespace Modules\Members\Entities;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class MemberType extends Model
{
  protected $fillable = [
    'name',
    'subcription_fee',
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
