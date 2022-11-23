<?php

namespace Modules\Gallery\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Modules\Gallery\Entities\GalleryImage;
class Gallery extends Model
{
    // protected $fillable = [
    //   'gallery_name',
    //   'cover_img',
    //   'description',
    //   'status',
    //   'created_by',
    // ];
    protected $guarded = ['id', 'created_at', 'updated_at'];


public function users_created_by()
  {
    return $this->hasOne(User::class,'id','created_by');;
  }
  public function users_updated_by()
  {
    return $this->hasOne(User::class,'id','updated_by');;
  }
  public function photos()
  {
    return $this->hasMany(GalleryImage::class, 'gallery_id', 'id');
  }
}
