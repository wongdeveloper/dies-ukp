<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmbedVideo;
use App\Models\Video;
use App\Http\Requests\EmbedVideo\StoreEmbedVideoRequest;
use App\Http\Requests\EmbedVideo\UpdateEmbedVideoRequest;
use RealRashid\SweetAlert\Facades\Alert;

class EmbedVideoController extends Controller
{
    /**
     * Index Function
     * @return \Illuminate\http\Response
     * 
     */
    public function index()
    {

    }

    /**
     * Show Create Form
     * @return \Illuminate\Http\Response
     * 
     */
    public function create()
    {
        return view('embed_video.create');
    }

    /**
     * Store to Storage
     * @param \App\Http\Requests\StoreEmbedVideoRequest
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(StoreEmbedVideoRequest $request)
    {
        $video = null;
        if (!$request->hasFile('video')) {
            alert()->error('Video Empty!', 'Please make sure video are uploaded');
        }else{
            $video_name = uniqid() . '.' . $request->video->extension();
            $request->video->move(public_path('assets/videos/embed', $video_name));
            $video_path = asset('assets/videos/embed/' . $video_name);
            $video = Video::create([
                'path' => $video_path
            ]);
        }

        EmbedVideo::create([
            'name' => $request->name,
            'video_id' => $video ? $video->id : null
        ]);
    }

    /**
     * Show Edit Form
     * @param int $evid
     * @return \Illuminate\Http\Response
     * 
     */
    public function edit(int $evid)
    {
        $embed_video = EmbedVideo::findOrFail($evid);
        return view('embed_video.edit', compact('embed_video'));
    }

    /**
     * Update Specific Storage
     * @param \App\Http\Requests\UpdateEmbedVideoRequest
     * @return \Illuminate\Http\Response
     * 
     */
    public function update(UpdateEmbedVideoRequest $request)
    {
        $video = null;
        if (!$request->hasFile('video')) {
            alert()->error('Video Empty!', 'Please make sure video are uploaded');
        } else {
            $video_name = uniqid() . '.' . $request->video->extension();
            $request->video->move(public_path('assets/videos/embed', $video_name));
            $video_path = asset('assets/videos/embed/' . $video_name);
            $video = Video::create([
                'path' => $video_path
            ]);
        }

        $embedVideo = EmbedVideo::findOrFail($request->evid);

        $embedVideo->update([
            'name' => $request->name,
            'video_id' => $video ? $video->id : $embedVideo->video_id
        ]);
    }
}
