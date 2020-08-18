<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::paginate();
        return view('model.tag.index', compact('tags'));
    }

    public function show($id)
    {
        $tag = Tag::findOrFail($id);
        return view('model.tag.show', compact('tag'));
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'title' => "required|string",
                
            ]
        );
        Tag::create($data);
        return back()->with('msg','Tag Add Successfully');
    }

    public function edit(Request $request)
    {
        $data = $request->except(['_token', '_method', 'id']);
        Tag::whereId($request->id)->update($data);
        return back()->with('msg', 'Tag Edited  Successfully');
    }
}
