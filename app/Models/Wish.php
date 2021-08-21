<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;

class Wish extends Model
{
    use HasFactory;
    use CascadeSoftDeletes;
    use SoftDeletes;

    protected $fillable = ["name", "role_id", "email", "detail1", "detail2", "wish", "image_id", "image_title", "video_id", "video_title", "is_vip"];
    protected $cascadeDeletes = ['videos', 'images'];


    //Scopes
    public function scopeNameLike($query, $value)
    {
        return $query->where('name', 'like', "%$value%");
    }

    public function scopeRoleId($query, $rid)
    {
        return $query->where('role_id', $rid, "%$rid%");
    }

    //Relation
    public function image()
    {
        return $this->hasOne(Image::class);
    }
    public function video()
    {
        return $this->hasOne(Video::class);
    }

    //Accessor
    public function getIsVIPAttribute()
    {
        return $this->is_vip == 1 ? true : false;
    }
}
