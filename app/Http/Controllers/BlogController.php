<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function add()
    {
        return view('blog.add');
    }

    public function submit(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->body = $request->body;
        // dd($blog);
        $blog->save();
        return back()->with('message', 'Blog Added Successfully!');
    }

    public function edit(Blog $blog, Request $request)
    {
        if ($request->getMethod() == "POST") {
            $blog->title = $request->title;
            $blog->body = $request->body;
            // dd($blog);
            $blog->save();
            return redirect()->route('blog.add')->with('message', 'Blog Edited Successfully!');
        } else {
            return view('blog.edit', ['item' => $blog]);
        }
    }

    public function delete(Blog $blog)
    {
        $blog->delete();
        return back()->with('message', 'Blog Deleted Successfully!');
    }
}
