<?php

namespace Modules\Members\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Members\Entities\Member;
use Modules\Members\Entities\RenownedAlumniMembersMoreImage;

use App\Models\User;

class RenownedAlumniMembers extends Model
{
	protected $fillable = [
		'member_id',
		're_al_member_content',
		're_al_member_msg',
		'video_link',
		'created_by',
		'updated_by',
	];
	public function users_created_by()
	{
		return $this->hasOne(User::class,'id','created_by');
	}
	public function users_updated_by()
	{
		return $this->hasOne(User::class,'id','updated_by');
	}

	public function member()
	{
		return $this->hasOne(Member::class,'id','member_id');
	}
	public function photos()
  	{
    	return $this->hasMany(RenownedAlumniMembersMoreImage::class, 
    		're_alumni_member_id',
    		'id'
    	);
  	}
}
