<?php

namespace App\Http\Controllers;

use App\Poll;
use App\Polltmp;
use App\Post;
use App\Result;
use Illuminate\Http\Request;

class PollsController extends Controller
{
    
    public function index()
    {
        $polls  = Poll::all();
        // dd($polls);
        return view('model.poll.index',compact('polls'));
    }

    public function store(Request $request)
    {
         Poll::create($request->all());
         return back()->with('msg','Submitted Successfully');
    }
    public function vote(Request $request)
    {
       Result::create($request->all());
       return back()->with('msg','Thanks for your feedback');
    }
}
