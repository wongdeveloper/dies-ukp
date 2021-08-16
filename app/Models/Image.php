<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ["path"];

    //Relation
    public function wishImage()
    {
        return $this->hasOne(WishImage::class);
    }

    public function blog()
    {
        return $this->hasOne(Blog::class);
    }
    
}
