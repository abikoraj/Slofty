<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function add()
    {
        return view('team.add');
    }

    public function submit(Request $request)
    {
        $team = new Team();
        $team->name = $request->name;
        $team->post = $request->post;
        $team->image = $request->image->store('data/teams-img', 'public');
        $team->facebook = $request->facebook;
        $team->twitter = $request->twitter;
        $team->linkedin = $request->linkedin;
        $team->save();
        // dd($team);
        return redirect()->back()->with('message', 'Team Added Successfully!');
    }

    public function edit(Team $team, Request $request)
    {
        if ($request->getMethod() == "POST") {
            if ($request->hasFile('image')) {
                $team->image = $request->image->store('data/teams-img', 'public');
            }
            $team->name = $request->name;
            $team->post = $request->post;
            $team->facebook = $request->facebook;
            $team->twitter = $request->twitter;
            $team->linkedin = $request->linkedin;
            // dd($team);
            $team->save();
            return redirect()->route('team.add')->with('message', 'Team Edited Successfully!');
        } else {
            return view('team.edit', ['item' => $team]);
        }
    }

    public function delete(Team $team)
    {
        $team->delete();
        return redirect()->back()->with('message', 'Team Deleted Successfully!');
    }
}
