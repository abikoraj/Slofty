<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit');
    }

    public function update(Profile $profile, Request $request)
    {
        $profile->name = $request->name;
        $profile->address = $request->address;
        $profile->email = $request->email;
        $profile->phone = $request->phone;
        $profile->website = $request->website;
        $profile->support = $request->support;
        $profile->map = $request->map;
        $profile->facebook = $request->facebook;
        $profile->twitter = $request->twitter;
        $profile->instagram = $request->instagram;
        $profile->linkedin = $request->linkedin;
        $profile->pinterest = $request->pinterest;
        $profile->youtube = $request->youtube;
        // dd($profile);
        $profile->save();
        return redirect()->route('dashboard')->with('message', 'Profile Updated Successfully!');
    }
}
