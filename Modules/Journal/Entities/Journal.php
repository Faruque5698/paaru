<?php

namespace Modules\Journal\Entities;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Journal extends Model
{
    protected $fillable = [
      'authors',
      'title',
      'keywords',
      'abstract',
      'pdf_file',
      'year',
      'publication_date',
      'publication_status',
      'created_by',
      'updated_by',
      'deleted_by',
    ];

    public function users_created_by()
    {
      return $this->hasOne(User::class,'id','created_by');;
    }
    public function users_published_by()
    {
      return $this->hasOne(User::class,'id','updated_by');;
    }
    public function users_deleted_by()
    {
      return $this->hasOne(User::class,'id','deleted_by');;
    }
}
