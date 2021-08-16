<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;

class EmbedVideo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ["name", "video_id"];
    protected $cascadeDeletes = ['videos'];

    //Scope
    public function scopeVideoId($query, $vid)
    {
        return $query->where('video_id', $vid);
    }

    public function scopeNameLike($query, $value)
    {
        return $query->where('name', 'like', "%$value%");
    }

    public function scopeOrderByName($query)
    {
        return $query->orderBy('name');
    }

    //Relation
    public function video()
    {
        return $this->hasOne(Video::class);
    }
}
