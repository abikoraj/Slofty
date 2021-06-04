<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function edit()
    {
        return view('about.skill.edit');
    }
    public function update(Skill $skill, Request $request)
    {
        if ($request->hasFile('sideImage')) {
            $skill->sideImage = $request->sideImage->store('data/bg-pic', 'public');
        }
        $skill->heading = $request->heading;
        $skill->subHeading = $request->subHeading;
        $skill->description = $request->description;
        $skill->skill1 = $request->skill1;
        $skill->progress1 = $request->progress1;
        $skill->skill2 = $request->skill2;
        $skill->progress2 = $request->progress2;
        $skill->skill3 = $request->skill3;
        $skill->progress3 = $request->progress3;
        $skill->skill4 = $request->skill4;
        $skill->progress4 = $request->progress4;
        $skill->skill5 = $request->skill5;
        $skill->progress5 = $request->progress5;
        // dd($skill);
        $skill->save();
        return redirect()->back()->with('message', 'Skills Updated Successfully!');
    }
}
