<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Http\Resources\TagResource;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        return TagResource::collection(Tag::paginate());
    }

    public function posts($id)
    {
        $tag = Tag::find($id);
        $posts = $tag->posts;
        return PostResource::collection($posts);
    }
}
