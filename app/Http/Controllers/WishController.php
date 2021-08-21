<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    }

    /**
     * Store to Storage
     * @param \App\Http\Requests\StoreWishRequest
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(StoreWishRequest $request)
    {
        // dd($request);
        $detail1 = null;
        $detail2 = null;
        $image = null;
        $video = null;
        switch ($request->rid) {
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
            $request->image->move(public_path('assets/images/wishes', $image_name));
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
            'role_id' => $request->rid,
            'wish' => $request->wish,
            'is_vip' => 0
        ]);
        return back()->with('success', 'Ucapan anda berhasil diubah');
    }
}
