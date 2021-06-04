<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function add()
    {
        return view('testimonial.add');
    }

    public function submit(Request $request)
    {
        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->designation = $request->designation;
        $testimonial->message = $request->message;
        $testimonial->save();
        // dd($testimonial);
        return back()->with('message', 'Testimonial Added Successfully!');
    }

    public function edit(Testimonial $testimonial, Request $request)
    {
        if ($request->getMethod() == "POST") {
            $testimonial->name = $request->name;
            $testimonial->designation = $request->designation;
            $testimonial->message = $request->message;
            // dd($testimonial);
            $testimonial->save();
            return redirect()->route('testimonials.add')->with('message', 'Testimonial Updated Successfully!');
        } else {
            return view('testimonial.edit', ['item' => $testimonial]);
        }
    }

    public function delete(Testimonial $testimonial)
    {
        $testimonial->delete();
        return back()->with('message', 'Testimonial Deleted Successfully!');
    }
}
