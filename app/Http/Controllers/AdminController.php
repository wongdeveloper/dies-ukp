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

    }

    public function login(Request $request)
    {
        
    }

    public function wish_index()
    {

    }

    public function wish_create()
    {

    }

    public function wish_store(StoreWishRequest $request)
    {

    }

    public function wish_edit(int $id)
    {

    }

    public function wish_update(UpdateWishRequest $request)
    {

    }

    public function wish_destroy(int $id)
    {

    }

    public function photo_index()
    {
    }

    public function photo_create()
    {
    }

    public function photo_store(StoreWishRequest $request)
    {
    }

    public function photo_edit(int $id)
    {
    }

    public function photo_update(UpdateWishRequest $request)
    {
    }

    public function photo_destroy(int $id)
    {
    }

    public function video_index()
    {
    }

    public function video_create()
    {
    }

    public function video_store(StoreWishRequest $request)
    {
    }

    public function video_edit(int $id)
    {
    }

    public function video_update(UpdateWishRequest $request)
    {
    }

    public function video_destroy(int $id)
    {
    }
}
