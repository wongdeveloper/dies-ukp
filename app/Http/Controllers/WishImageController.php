<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Http\Requests\WIshImage\StoreWishImageRequest;
use App\Http\Requests\WishImage\UpdateWishImageRequest;
use App\Models\WishImage;
use Illuminate\Http\Request;

class WishImageController extends Controller
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
     * @param \App\Http\Requests\StoreWishImageRequest
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(StoreWishImageRequest $request)
    {
        $image = null;
        if (!$request->hasFile('image')) {
            alert()->error('Image Empty!', 'Please make sure image are uploaded');
        }else{
            $image_name = uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/wishes', $image_name));
            $image_path = asset('assets/images/wishes/' . $image_name);
            $image = Image::create([
                'path' => $image_path
            ]);
        }
        $wish_image_request = WishImage::create([
            'name' => $request->name,
            'role_id' => $request->rid,
            'title' => $request->title,
            'description' => $request->description,
            'image_id' => $image ? $image->id : null,
            'is_vip' => 0
        ]);

        return back()->with('Success', 'Ucapan Foto Berhasil Ditambahkan');
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
     * @param \App\Http\Requests\UpdateWishImageRequest
     * @return \Illuminate\Http\Response
     * 
     */
    public function update(UpdateWishImageRequest $request)
    {
        $image = null;
        if (!$request->hasFile('image')) {
            alert()->error('Image Empty!', 'Please make sure image are uploaded');
        } else {
            $image_name = uniqid() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/wishes', $image_name));
            $image_path = asset('assets/images/wishes/' . $image_name);
            $image = Image::create([
                'path' => $image_path
            ]);
        }
        $wish_image_request = WishImage::findOrFail($request->wiid);
        $wish_image_request->update([
            'name' => $request->name,
            'role_id' => $request->rid,
            'title' => $request->title,
            'description' => $request->description,
            'image_id' => $image ? $image->id : $wish_image_request->image_id,
            'is_vip' => 0
        ]);

        return back()->with('Success', 'Ucapan Foto Berhasil Diubah');
    }
}
