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
        return view('admin.login.embed_video', compact('embed_videos'));
    }

    /**
     * Show Create Form
     * @return \Illuminate\Http\Response
     * 
     */
    public function create()
    {
        return view('admin.create.embed_video');
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
        if (isset($request->video)) {
            $video = Video::create([
                'path' => $request->video
            ]);
        }else{
            alert()->error('Video Empty!', 'Please make sure video are uploaded');
        }

        EmbedVideo::create([
            'name' => $request->name,
            'video_id' => $video ? $video->id : null
        ]);

        return back()->with('success', 'Embed Video Successfully Created');

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
        return view('admin.edit.embed_video', compact('embed_video'));
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
        if (isset($request->video)) {
            $video = Video::create([
                'path' => $request->video
            ]);
        } else {
            alert()->error('Video Empty!', 'Please make sure video are uploaded');
        }

        $embedVideo = EmbedVideo::findOrFail($request->evid);

        $embedVideo->update([
            'name' => $request->name,
            'video_id' => $video ? $video->id : $embedVideo->video_id
        ]);
        return back()->with('success', 'Embed Video Successfully Updated');
        
    }

    /**
     * Delete Resource in Storage
     * @return \Illuminate\Http\Response
     * 
     */
    public function destroy(int $id)
    {
        EmbedVideo::findOrFail($id)->delete();
        return back()->with('success', 'Embed Video Successfully Deleted');
    }
}
