<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Http\Requests\Blog\StoreBlogRequest;
use App\Http\Requests\Blog\UpdateBlogRequest;
use App\Models\Image;
use App\Models\Video;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    /**
     * Index Function
     * @return \Illuminate\http\Response
     * 
     */
    public function index()
    {
        $blogs = Blog::orderByDate()->get();
        return view('kegiatan.index', compact('blogs'));
    }

    /**
     * Show specific item in the storage
     * @param string $slug
     * @return \Illuminate\Http\Response
     * 
     */
    public function show(string $slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('kegiatan.template', compact('blog'));
    }

    /**
     * Show Create Form
     * @return \Illuminate\Http\Response
     * 
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store to Storage
     * @param \App\Http\Requests\StoreBlogRequest
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(StoreBlogRequest $request)
    {
        $image = null;
        $video = null;
        if (!$request->hasFile('image')) {
            alert()->error('Image Empty!', 'Please make sure image are uploaded');
        }
        else{
            $image_name = uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/blog', $image_name));
            $image_path = asset('assets/images/blog/' . $image_name);
            $image = Image::create([
                'path' => $image_path
            ]);
        }

        if (!$request->hasFile('video')) {
            $video_name = uniqid() . '.' . $request->video->extension();
            $request->video->move(public_path('assets/videos/blog', $video_name));
            $video_path = asset('assets/videos/blog/' . $video_name);
            $video = Video::create([
                'path' => $video_path
            ]);
        }

        Blog::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'description' => $request->description,
            'image_id' => $image ? $image->id : null,
            'video_id' => $video ? $video->id : null
        ]);

        return redirect()->route('blog.index')->with('success', 'Post Created Successfully');

    }

    /**
     * Show Edit Form
     * @param int $bid
     * @return \Illuminate\Http\Response
     * 
     */
    public function edit(int $bid)
    {
        $blog = Blog::findOrFail($bid);
        return view('blog.edit', compact('blog'));
    }

    /**
     * Update Specific Storage
     * @param \App\Http\Requests\UpdateBlogRequest
     * @return \Illuminate\Http\Response
     * 
     */
    public function update(UpdateBlogRequest $request)
    {
        $image = null;
        $video = null;
        if (!$request->hasFile('image')) {
            alert()->error('Image Empty!', 'Please make sure image are uploaded');
        } else {
            $image_name = uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/blog', $image_name));
            $image_path = asset('assets/images/blog/' . $image_name);
            $image = Image::create([
                'path' => $image_path
            ]);
        }

        if (!$request->hasFile('video')) {
            $video_name = uniqid() . '.' . $request->video->extension();
            $request->video->move(public_path('assets/videos/blog', $video_name));
            $video_path = asset('assets/videos/blog/' . $video_name);
            $video = Video::create([
                'path' => $video_path
            ]);
        }

        $blog = Blog::findOrFail($request->bid);

        $blog->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'description' => $request->description,
            'image_id' => $image ? $image->id : $blog->image_id,
            'video_id' => $video ? $video->id : $blog->video_id
        ]);

        return redirect()->route('blog.index')->with('success', 'Post Created Successfully');

    }

    public function destroy(int $id)
    {
        Blog::findOrFail($id)->delete();
        return redirect()->route('blog.index')->with('success', 'Post deleted successfully.');
    }
}
