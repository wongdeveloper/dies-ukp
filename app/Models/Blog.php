<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ["title", "description", "image_id", "video_id"];

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

    //Relation
    public function video()
    {
        return $this->hasOne(Video::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class);
    }

    // /**
    //  * Index Function
    //  * @return \Illuminate\http\Response
    //  * 
    //  */
    // public function index()
    // {

    // }

    // /**
    //  * Show Create Form
    //  * @return \Illuminate\Http\Response
    //  * 
    //  */
    // public function create()
    // {

    // }

    // /**
    //  * Store to Storage
    //  * @param \App\Http\Requests\StoreBlogRequest
    //  * @return \Illuminate\Http\Response
    //  * 
    //  */
    // public function store(StoreBlogRequest $request)
    // {

    // }

    // /**
    //  * Show Edit Form
    //  * @param int $bid
    //  * @return \Illuminate\Http\Response
    //  * 
    //  */
    // public function edit(int $bid)
    // {

    // }

    // /**
    //  * Update Specific Storage
    //  * @param \App\Http\Requests\UpdateBlogRequest
    //  * @return \Illuminate\Http\Response
    //  * 
    //  */
    // public function update(UpdateBlogRequest $request)
    // {

    // }

}
