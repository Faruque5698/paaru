<?php

namespace Modules\Event\Entities;

use Illuminate\Database\Eloquent\Model;

use App\Models\User;

use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{

  protected $fillable = [
    'title',
    'date_time',
    'description',
    'starting_time',
    'ending_time',
    'ticket_book',
    'ticket_money',
    'ending_time',
    'place',
    'location',
    'image',
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
