<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Countdown;
use App\Http\Requests\Countdown\UpdateCountdownRequest;

class CountdownController extends Controller
{
    /**
     * Index Function
     * @return \Illuminate\http\Response
     * 
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $countdown = Countdown::first();
            return $countdown;
        }
        return back()->with('warning', 'False request');
    }

    /**
     * Show Edit Form
     * @return \Illuminate\Http\Response
     * 
     */
    public function edit()
    {
        $countdown = Countdown::first();
        return view('countdown.edit', compact('countdown'));
    }

    /**
     * Update Specific Storage
     * @param \App\Http\Requests\UpdateCountdownRequest
     * @return \Illuminate\Http\Response
     * 
     */
    public function update(UpdateCountdownRequest $request)
    {
        Countdown::first()->update([
            'date_countdown' => $request->countdown
        ]);
        return back()->with('success', 'Countdown updated successfully');
    }
}
