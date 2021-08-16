<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;
    use CascadeSoftDeletes;
    protected $fillable = ["title", "slug", "description", "image_id", "video_id"];
    protected $cascadeDeletes = ['videos', 'images'];

    //Scope
    public function scopeImageId($query, $imgid)
    {
        return $query->where('image_id', $imgid);
    }

    public function scopeVideoId($query, $vid)
    {
        return $query->where('video_id', $vid);
    }

    public function scopeTitleLike($query, $value)
    {
        return $query->where('title', 'like', "%$value%");
    }

    public function scopeOrderByTitle($query)
    {
        return $query->orderBy('title');
    }

    public function scopeOrderByDate($query)
    {
        return $query->orderBy('created_at');
    }

    //Relation
    public function video()
    {
        return $this->hasOne(Video::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class);
    }

}
