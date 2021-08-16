<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;

class WishVideo extends Model
{
    use HasFactory;
    use SoftDeletes;
    use CascadeSoftDeletes;

    protected $fillable = ["wish_id", "title", "description", "video_id"];
    protected $cascadeDeletes = ['videos'];

    //Scopes
    public function scopeWishId($query, $wid)
    {
        return $query->where('wish_id', $wid);
    }

    public function scopeTitleLike($query, $value)
    {
        return $query->where('title', 'like', "%$value%");
    }

    public function scopeOrderByTitle($query)
    {
        return $query->orderBy('title');
    }

    //Relation
    public function wish()
    {
        return $this->hasOne(Wish::class);
    }

    public function video()
    {
        return $this->hasOne(Video::class);
    }
}
