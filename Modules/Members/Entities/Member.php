<?php

namespace Modules\Members\Entities;

use Illuminate\Database\Eloquent\Model;

use Modules\Members\Entities\MemberType;

use Devfaysal\BangladeshGeocode\Models\District;

use Modules\Members\Entities\RenownedAlumniMembers;

use Modules\Committee\Entities\Committee;
use Modules\Committee\Entities\AdvisoryCommittee;

class Member extends Model
{
  protected $fillable = [
    'title',
    'name',

    'date_of_birth',

    'bachelor_year',
    'bachelor_roll',
    'masters_year',
    'masters_roll',
    'mphil_year',
    'mphil_roll',
    'phd_year',
    'phd_roll',

    'm_location',
    'm_country',
    'm_post_code',
    'm_district',
    'm_email',
    'm_phone',

    'p_location',
    'p_country',
    'p_post_code',
    'p_district',

    'occupation',
    'designation',

    'name_of_spouse',
    'no_of_son',
    'no_of_daughter',

    'cat_of_member',

    'amount',
    'mode_of_payment',

    'payment_date',
    'transaction_id',
    'bank_name',
    'branch_name',

    'image',
    'signature',

    'publication_status',
    'created_by',
    'updated_by',
  ];
  
  public function executive_committee_member()
  {
    return $this->hasOne(Committee::class,'member_id');
  }

  public function advisory_committee_member()
  {
    return $this->hasOne(AdvisoryCommittee::class,'member_id');
  }

  public function types()
  {
    return $this->belongsTo(MemberType::class,'cat_of_member');
  }

  public function getDistrictAttribute()
  {
    return $this->getDistrict ? $this->getDistrict->name : '';
  }

  public function getDistrict()
  {
    return $this->belongsTo(District::class,'m_district');
  }


  public function getPDistrict()
  {
    return $this->belongsTo(District::class,'p_district','id');
  }

  public function getRenownedAlumniousAttribute()
  {
    return $this->getRenownedAlumnious;
  }

  public function getVideoLinkAttribute()
  {
    return $this->getRenownedAlumnious->video_link;
  }
  public function getReAlMemberMsgAttribute()
  {
    return $this->getRenownedAlumnious->re_al_member_msg;
  }

  public function getReAlMemberContentAttribute()
  {
    return $this->getRenownedAlumnious->re_al_member_content;
  }

  public function getRenownedAlumnious()
  {
    return $this->belongsTo(RenownedAlumniMembers::class,'id','member_id');
  }
}
