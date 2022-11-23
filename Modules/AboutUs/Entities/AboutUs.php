<?php

namespace Modules\AboutUs\Entities;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class AboutUs extends Model
{

  protected $fillable = [
    'name',
    'slogan',
    'about_bls',
    'activity_name',
    'activity_message',
    'image',
    'created_by',
    'updated_by',
    'publication_status',
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
