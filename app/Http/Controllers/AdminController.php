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

    // public function login(Request $request)
    // {
    //     dd($request);
    // }

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

    }

    public function wish_edit(int $id)
    {

        // return view('admin.edit.teks');
    }

    public function wish_update(UpdateWishRequest $request)
    {

    }

    public function wish_destroy(int $id)
    {
        wish::findOrFail($id)->delete();
        return back()->with('success', 'Wish Deleted Successfully');
    }

    public function photo_index()
    {

        return view('admin.login.foto');
    }

    public function photo_create()
    {

        // return view('admin.create.foto');
    }

    // public function photo_store(StoreWishRequest $request)
    // {

    // }

    public function photo_edit(int $id)
    {

        // return view('admin.edit.foto');
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

        return view('admin.login.video');
    }

    public function video_create()
    {

        // return view('admin.create.video');
    }

    // public function video_store(StoreWishRequest $request)
    // {

    // }

    public function video_edit(int $id)
    {

        // return view('admin.edit.video');
    }

    // public function video_update(UpdateWishRequest $request)
    // {
    // }

    // public function video_destroy(int $id)
    // {
    // }

    public function general_index()
    {

        return view('admin.login.general');
    }

    public function general_create()
    {

        // return view('admin.create.general');
    }

    // public function general_store(StoreWishRequest $request)
    // {
    // }

    public function general_edit(int $id)
    {

        // return view('admin.edit.general');
    }

    // public function general_update(UpdateWishRequest $request)
    // {
    // }

    // public function general_destroy(int $id)
    // {
    // }
}
