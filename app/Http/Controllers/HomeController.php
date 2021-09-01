<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wish;
use App\Models\Countdown;
use App\Models\EmbedVideo;
use App\Models\Blog;
use App\Models\Role;

class HomeController extends Controller
{
    /**
     * Show Home Page
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $embed_videos = EmbedVideo::all();
        foreach ($embed_videos as $key => $embed_video) {
            parse_str(parse_url($embed_video->video->path, PHP_URL_QUERY), $my_array_of_vars);
            if (array_key_exists('v', $my_array_of_vars)) {
                $embed_video->youtube_id = $my_array_of_vars['v'];
            }else{
                $embed_video->youtube_id = 0;
            }
        }
        $roles = Role::where('id', '!=', '6')->get();
        $blogs = Blog::orderByDate()->limit(3)->get();
        $wish_images = Wish::where('image_id', '!=', 'NULL')->whereNull('video_id')->where('is_vip', 0)->orderBy('created_at')->get();
        $wish_vips = Wish::where('is_vip', '1')->get();
        return view('home.index', compact('embed_videos', 'blogs', 'wish_images', 'wish_vips', 'roles'));
    }

    /**
     * AJAX Get Countdown
     * @param \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     * 
     */
    public function get_countdown(Request $request)
    {
        $countdown = null;
        if ($request->ajax()) {
            $countdown = Countdown::first();
            return $countdown;
        }else{
            return back()->with('error', 'Request method not accepted');
        }

    }
}
