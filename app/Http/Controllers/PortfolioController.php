<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Tag;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function add()
    {
        return view('portfolio.add');
    }

    public function tagSubmit(Request $request)
    {
        $tag = new Tag();
        $tag->name = $request->name;
        $tag->save();
        // dd($tag);
        return back()->with('message', 'Tag Added Successfully!');
    }

    public function tagDelete(Tag $tag)
    {
        $tag->delete();
        return back()->with('message', 'Tag Deleted Successfully!');
    }

    public function submit(Request $request)
    {
        $portfolio = new Portfolio();
        $portfolio->image = $request->image->store('data/galary-img', 'public');
        $portfolio->tag_id = $request->tag_id;
        $portfolio->caption = $request->caption;
        // dd($portfolio);
        $portfolio->save();
        return back()->with('message', 'Portfolio Added Successfully!');
    }

    public function delete(Portfolio $portfolio)
    {
        $portfolio->delete();
        return back()->with('message', 'Portfolio Deleted Successfully');
    }
}
