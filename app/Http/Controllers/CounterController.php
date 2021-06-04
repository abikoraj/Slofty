<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function edit()
    {
        return view('about.counter.edit');
    }

    public function update(Counter $counter, Request $request)
    {
        if ($request->hasFile('background')) {
            $counter->background = $request->background->store('data/bg-pic', 'public');
        }
        $counter->title1 = $request->title1;
        $counter->icon1 = $request->icon1;
        $counter->count1 = $request->count1;

        $counter->title2 = $request->title2;
        $counter->icon2 = $request->icon2;
        $counter->count2 = $request->count2;

        $counter->title3 = $request->title3;
        $counter->icon3 = $request->icon3;
        $counter->count3 = $request->count3;

        $counter->title4 = $request->title4;
        $counter->icon4 = $request->icon4;
        $counter->count4 = $request->count4;

        // dd($counter);
        $counter->save();
        return redirect()->back()->with('message', 'Counter Updated Successfully!');
    }
}
