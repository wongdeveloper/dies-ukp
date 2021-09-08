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
    public function index(Request $request)
    {
        $embed_videos = EmbedVideo::all();
        foreach ($embed_videos as $key => $embed_video) {
            parse_str(parse_url($embed_video->video->path, PHP_URL_QUERY), $my_array_of_vars);
            if (array_key_exists('v', $my_array_of_vars)) {
                $embed_video->youtube_id = $my_array_of_vars['v'];
            }else{
                $url = parse_url($wish_video->video->path);
                $url_path = preg_split('#/#', $url['path']);
                $embed_video->youtube_id = $url_path[1];
            }
        }
        $roles = Role::where('id', '!=', '6')->get();
        $blogs = Blog::orderByDate()->limit(3)->get();
        $wish_images = Wish::where('image_id', '!=', 'NULL')->whereNull('video_id')->where('is_vip', 0)->orderByDesc('created_at')->get();
        $wish_texts = Wish::whereNull('video_id')->whereNull('image_id')->orderByDesc('created_at')->limit(6)->get();
        if ($request->segment(1) == "en") {
            return view('en.home', compact('embed_videos', 'blogs', 'wish_images', 'wish_texts', 'roles'));
        }
        return view('home.index', compact('embed_videos', 'blogs', 'wish_images', 'wish_texts', 'roles'));
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
