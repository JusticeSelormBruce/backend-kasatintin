<?php

namespace App\Http\Controllers\shared;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Post;
use Illuminate\Http\Request;

class MasterPostController extends Controller
{

    public function index()
    {
        return  PostResource::collection(Post::with(['author', 'comments', 'images', 'videos', 'category','tags'])->paginate());
    }
}
