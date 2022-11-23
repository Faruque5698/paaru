<?php

namespace Modules\ContactUs\Entities;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
    	'first_name',
    	'last_name',
    	'phone',
    	'email',
    	'subject',
    	'message',
    ];
}
