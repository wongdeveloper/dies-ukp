<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;

class Wish extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ["name", "role_id", "wish", "is_vip"];
    protected $cascadeDeletes = ['wish_images', 'wish_videos'];

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
    public function wishVideo()
    {
        return $this->hasOne(WishVideo::class);
    }

    public function wishImage()
    {
        return $this->hasOne(WishImage::class);
    }

    //Accessor
    public function getIsVIPAttribute()
    {
        return $this->is_vip == 1 ? true : false;
    }
}
