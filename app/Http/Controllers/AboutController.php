<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function edit()
    {
        return view('about.edit');
    }

    public function update(About $about, Request $request)
    {
        $about->heading = $request->heading;
        $about->subHeading = $request->subHeading;
        $about->title1 = $request->title1;
        $about->description1 = $request->description1;
        $about->title2 = $request->title2;
        $about->description2 = $request->description2;
        $about->title3 = $request->title3;
        $about->description3 = $request->description3;
        // dd($about);
        $about->save();
        return redirect()->back()->with('message', 'About Updated Successfully!');
    }
}
