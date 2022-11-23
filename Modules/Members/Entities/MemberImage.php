<?php

namespace Modules\Members\Entities;

use Illuminate\Database\Eloquent\Model;

class MemberImage extends Model
{
  protected $fillable = [
    'member_id',
    'member_image'
  ];
}
