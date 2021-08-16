<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ["path"];

    //Relation
    public function wishVideo()
    {
        return $this->hasOne(WishVideo::class);
    }

    public function blog()
    {
        return $this->hasOne(Blog::class);
    }

    public function embedVideo()
    {
        return $this->hasOne(EmbedVideo::class);
    }
}
