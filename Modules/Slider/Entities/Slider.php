<?php

namespace Modules\Slider\Entities;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Slider extends Model
{
    protected $fillable = [
      'title',
      'photo',
      'first_slogan',
      'second_slogan',
      'link',
      'created_by',
      'updated_by',
      'publication_status',
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
