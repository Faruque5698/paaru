<?php

namespace Modules\SendSms\Entities;

use Illuminate\Database\Eloquent\Model;

class SendSms extends Model
{
    protected $fillable = [
      'subject',
      'message',
    ];
}
