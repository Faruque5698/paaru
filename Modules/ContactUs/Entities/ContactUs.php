<?php

namespace Modules\ContactUs\Entities;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;

use Illuminate\Database\Eloquent\SoftDeletes;

class ContactUs extends Model
{

  use SoftDeletes;

  protected $fillable = [
    'mobile',
    'phone',
    'email',
    'mail',
    'place',
    'location',
    'geo_location',
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

  public function users_deleted_by()
  {
    return $this->hasOne(User::class,'id','deleted_by');
  }

}
