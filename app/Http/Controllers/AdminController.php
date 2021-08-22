<?php

namespace App\Http\Controllers;

use App\Http\Requests\Wish\StoreWishRequest;
use App\Http\Requests\Wish\UpdateWishRequest;
use Illuminate\Http\Request;
use App\Models\Wish;
use App\Models\Role;
use App\Models\Image;
use App\Models\Video;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.gate');
    }

    public function wish_index()
    {
        $wish_vip = Wish::where('is_vip', '1')->get();
        return view('admin.login.index', compact('wish_vip'));
    }

    public function wish_create()
    {
        return view('admin.create.teks');
    }

    public function wish_store(StoreWishRequest $request)
    {
        $detail1 = null;
        $detail2 = null;
        $image = null;
        $video = null;
        if ($request->is_vip == 1) {
            $detail1 = $request->detail1;
            $detail2 = $request->detail2;
        }else{
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
            'is_vip' => $request->is_vip
        ]);
        return back()->with('success', 'Ucapan anda berhasil ditambahkan');
    }

    public function wish_edit(int $id)
    {
        $wish_vip = Wish::findOrFail($id);
        return view('admin.edit.teks', compact('wish_vip'));
    }

    public function wish_update(UpdateWishRequest $request)
    {
        $detail1 = null;
        $detail2 = null;
        $image = null;
        $video = null;
        if ($request->is_vip == 1) {
            $detail1 = $request->detail1;
            $detail2 = $request->detail2;
        } else {
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

        $wish = Wish::findOrFail($request->wid)->update([
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
            'is_vip' => $request->is_vip
        ]);
        return back()->with('success', 'Ucapan anda berhasil diubah');
    }

    public function wish_destroy(int $id)
    {
        wish::findOrFail($id)->delete();
        return back()->with('success', 'Wish Deleted Successfully');
    }

    public function photo_index()
    {
        $wish_images = Wish::where('image_id', '!=', 'NULL')->whereNull('video_id')->get();
        return view('admin.login.foto', compact('wish_images'));
    }

    // public function photo_create()
    // {
    //     return view('admin.create.foto');
    // }

    // public function photo_store(StoreWishRequest $request)
    // {

    // }

    public function photo_edit(int $id)
    {
        $wish_image = Wish::findOrFail($id);
        return view('admin.edit.foto', compact('wish_image'));
    }

    // public function photo_update(UpdateWishRequest $request)
    // {
    // }

    // public function photo_destroy(int $id)
    // {
    //     wish::findOrFail($id)->delete();
    //     return back()->with('success', 'Wish Deleted Successfully');
    // }

    public function video_index()
    {
        $wish_videos = Wish::where('video_id', '!=', 'NULL')->whereNull('image_id')->get();
        foreach ($wish_videos as $key => $wish_video) {
            parse_str(parse_url($wish_video->video->path, PHP_URL_QUERY), $my_array_of_vars);
            $wish_video->youtube_id = $my_array_of_vars['v'];
        }
        return view('admin.login.video', compact('wish_videos'));
    }

    public function video_create()
    {
        return view('admin.create.video');
    }

    // public function video_store(StoreWishRequest $request)
    // {

    // }

    public function video_edit(int $id)
    {
        $wish_video = Wish::findOrFail($id);
        return view('admin.edit.video', compact('wish_video'));
    }

    // public function video_update(UpdateWishRequest $request)
    // {
    // }

    // public function video_destroy(int $id)
    // {
    // }

    public function general_index()
    {
        $wishes = Wish::whereNull('video_id')->whereNull('image_id')->where('is_vip', 0)->get();
        return view('admin.login.general', compact('wishes'));
    }

    public function general_create()
    {

        return view('admin.create.general');
    }

    // public function general_store(StoreWishRequest $request)
    // {
    // }

    public function general_edit(int $id)
    {
        $wish = Wish::findOrFail($id);
        return view('admin.edit.general', compact('wish'));
    }

    // public function general_update(UpdateWishRequest $request)
    // {
    // }

    // public function general_destroy(int $id)
    // {
    // }
}