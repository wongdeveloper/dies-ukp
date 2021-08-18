<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wish;
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
        $wish = Wish::create([
            'name' => $request->name,
            'role_id' => $request->rid,
            'wish' => $request->wish,
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
