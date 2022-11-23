<?php

namespace Modules\Notice\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\User;

class Notice extends Model
{

  use SoftDeletes;

  protected $fillable = [
    'title',
    'date_time',
    'pdf_file',
    'publication_status',
    'created_by',
    'updated_by',
    'deleted_by',
  ];

  public function users_created_by()
  {
    return $this->hasOne(User::class,'id','created_by');;
  }
  public function users_updated_by()
  {
    return $this->hasOne(User::class,'id','updated_by');;
  }

  public function users_deleted_by()
  {
    return $this->hasOne(User::class,'id','deleted_by');;
  }
}
