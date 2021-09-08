<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Wish;
use App\Models\Image;
use App\Models\Video;
use App\Http\Requests\Wish\StoreWishRequest;
use App\Http\Requests\Wish\UpdateWishRequest;

class WishController extends Controller
{
    /**
     * Index Function
     * @return \Illuminate\http\Response
     * 
     */
    public function index(Request $request)
    {
        $wish_images = Wish::where('image_id', '!=', 'NULL')->whereNull('video_id')->where('is_vip', 0)->orderByDesc('created_at')->limit(9)->get();
        $wish_videos = Wish::where('video_id', '!=', 'NULL')->whereNull('image_id')->orderByDesc('created_at')->limit(9)->get();
        foreach ($wish_videos as $key => $wish_video) {
            parse_str(parse_url($wish_video->video->path, PHP_URL_QUERY), $my_array_of_vars);
            if (array_key_exists('v', $my_array_of_vars)) {
                $wish_video->youtube_id = $my_array_of_vars['v'];
            }else{
                $url = parse_url($wish_video->video->path);
                $url_path = preg_split('#/#', $url['path']);
                $wish_video->youtube_id = $url_path[1];
            }
        }
        $wish_texts = Wish::whereNull('video_id')->whereNull('image_id')->orderByDesc('created_at')->limit(9)->get();
        $roles = Role::where('id', '!=', '6')->get();
        if ($request->segment(1) == "en") {
            return view('en.wishes', compact('wish_images', 'wish_videos', 'wish_texts', 'roles'));
        }
        return view('ucapan.index', compact('wish_images', 'wish_videos', 'wish_texts', 'roles'));
    }

    /**
     * View Video Page
     * @return \Illuminate\Http\Response
     * 
     */
    public function video(Request $request)
    {
        $wish_videos = Wish::where('video_id', '!=', 'NULL')->whereNull('image_id')->get();
        foreach ($wish_videos as $key => $wish_video) {
            parse_str(parse_url($wish_video->video->path, PHP_URL_QUERY), $my_array_of_vars);
            if (array_key_exists('v', $my_array_of_vars)) {
                $wish_video->youtube_id = $my_array_of_vars['v'];
            }else{
                $url = parse_url($wish_video->video->path);
                $url_path = preg_split('#/#', $url['path']);
                $wish_video->youtube_id = $url_path[1];
            }
        }
        // dd($wish_videos);
        $roles = Role::where('id', '!=', '6')->get();
        if ($request->segment(1) == "en") {
            return view('en.videos', compact('wish_videos', 'roles'));
        }
        return view('ucapan.video', compact('wish_videos', 'roles'));
    }

    /**
     * View Image Page
     * @return \Illuminate\Http\Response
     * 
     */
    public function image(Request $request)
    {
        $wish_images = Wish::where('image_id', '!=', 'NULL')->whereNull('video_id')->where('is_vip', 0)->get();
        $roles = Role::where('id', '!=', '6')->get();
        if ($request->segment(1) == "en") {
            return view('en.photos', compact('wish_images', 'roles'));
        }
        return view('ucapan.foto', compact('wish_images', 'roles'));
    }

    /**
     * View Text Page
     * @return \Illuminate\Http\Response
     * 
     */
    public function text(Request $request)
    {
        $wish_texts = Wish::whereNull('video_id')->whereNull('image_id')->get();
        $roles = Role::where('id', '!=', '6')->get();
        if ($request->segment(1) == "en") {
            return view('en.text', compact('wish_texts', 'roles'));
        }
        return view('ucapan.teks', compact('wish_texts', 'roles'));
    }

    /**
     * Show Create Form
     * @return \Illuminate\Http\Response
     * 
     */
    public function create()
    {
    }

    /**
     * Store to Storage
     * @param \App\Http\Requests\StoreWishRequest
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(StoreWishRequest $request)
    {
        $detail1 = null;
        $detail2 = null;
        $image = null;
        $video = null;
        switch ($request->kategori) {
            case '1':
            case '3':
                $detail1 = $request->jurusan;
                $detail2 = $request->angkatan;
                break;
            case '2':
                $detail1 = $request->detail1;
                $detail2 = $request->detail2;
                break;
        }

        if ($request->hasFile('image')) {
            $image_name = uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/wishes'), $image_name);
            $image_path = asset('assets/images/wishes/' . $image_name);
            $image = Image::create([
                'path' => $image_path
            ]);
        }

        if (isset($request->video)) {
            $video = Video::create([
                'path' => $request->video
            ]);
        }

        $wish = Wish::create([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->kategori,
            'detail1' => $detail1,
            'detail2' => $detail2,
            'wish' => $request->wish,
            'image_id' => !is_null($image) ? $image->id : null,
            'image_title' => isset($request->image_title) ? $request->image_title : null,
            'video_id' => !is_null($video) ? $video->id : null,
            'video_title' => isset($request->video_title) ? $request->video_title : null,
            'is_vip' => 0
        ]);
        return back()->with('success', 'Ucapan anda berhasil ditambahkan');
    }

    /**
     * Show Edit Form
     * @param int $bid
     * @return \Illuminate\Http\Response
     * 
     */
    public function edit(int $bid)
    {
    }

    /**
     * Update Specific Storage
     * @param \App\Http\Requests\UpdateWishRequest
     * @return \Illuminate\Http\Response
     * 
     */
    public function update(UpdateWishRequest $request)
    {
        $wish = Wish::findOrFail($request->wid)->update([
            'name' => $request->name,
            'role_id' => $request->kategori,
            'wish' => $request->wish,
            'is_vip' => 0
        ]);
        return back()->with('success', 'Ucapan anda berhasil diubah');
    }
}
