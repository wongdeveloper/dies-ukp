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
use App\Models\Role;
use App\Models\RoleEn;


class BlogController extends Controller
{
    /**
     * Index Function
     * @return \Illuminate\http\Response
     * 
     */
    public function index(Request $request)
    {
        $blogs = Blog::orderByDate()->get();
        $roles = Role::where('id', '!=', '6')->get();
        if ($request->segment(1) == "en") {
            $roles = RoleEn::where('id', '!=', '6')->get();
            return view('en.programs', compact('blogs', 'roles'));
        }
        return view('kegiatan.index', compact('blogs', 'roles'));
    }

    /**
     * Show Blog on Admin Page
     * @return \Illuminate\Http\Response
     * 
     */
    public function admin()
    {
        $blogs = Blog::all();
        foreach ($blogs as $key => $blog) {
            if (!is_null($blog->video)) {
                parse_str(parse_url($blog->video->path, PHP_URL_QUERY), $my_array_of_vars);
                if (array_key_exists('v', $my_array_of_vars)) {
                    $blog->youtube_id = $my_array_of_vars['v'];
                }else{
                    $blog->youtube_id = 0;
                }
            }
        }
        return view('admin.login.kegiatan', compact('blogs'));
    }

    /**
     * Show specific item in the storage
     * @param string $slug
     * @return \Illuminate\Http\Response
     * 
     */
    public function show(string $slug, Request $request)
    {
        $blog = Blog::where('slug', $slug)->first();
        if (!is_null($blog->video)) {
            parse_str(parse_url($blog->video->path, PHP_URL_QUERY), $my_array_of_vars);
            if (array_key_exists('v', $my_array_of_vars)) {
                $blog->youtube_id = $my_array_of_vars['v'];
            }else{
                $url = parse_url($wish_video->video->path);
                $url_path = preg_split('#/#', $url['path']);
                $blog->youtube_id = $url_path[1];
            }
        }
        $roles = Role::where('id', '!=', '6')->get();
        if ($request->segment(1) == "en") {
            $roles = Role::where('id', '!=', '6')->get();
            return view('en.template', compact('blogs', 'roles'));
        }
        return view('kegiatan.template', compact('blog', 'roles'));
    }

    /**
     * Show Create Form
     * @return \Illuminate\Http\Response
     * 
     */
    public function create()
    {
        return view('admin.create.article');
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
            $request->image->move(public_path('assets/images/blog'), $image_name);
            $image_path = asset('assets/images/blog/' . $image_name);
            $image = Image::create([
                'path' => $image_path
            ]);
        }

        if (isset($request->video)) {
            $video = Video::create([
                'path' => $request->video
            ]);
        }

        Blog::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'description' => $request->description,
            'image_id' => $image ? $image->id : null,
            'video_id' => $video ? $video->id : null
        ]);

        return back()->with('success', 'Post Created Successfully');

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
        return view('admin.edit.article', compact('blog'));
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
            $request->image->move(public_path('assets/images/blog'), $image_name);
            $image_path = asset('assets/images/blog/' . $image_name);
            $image = Image::create([
                'path' => $image_path
            ]);
        }

        if (isset($request->video)) {
            $video = Video::create([
                'path' => $request->video
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

        return back()->with('success', 'Post Created Successfully');

    }

    public function destroy(int $id)
    {
        Blog::findOrFail($id)->delete();
        return back()->with('success', 'Post deleted successfully.');
    }
}
