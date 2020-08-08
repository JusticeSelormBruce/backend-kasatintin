<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Http\Resources\UserResource;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::with('posts', 'comments')->paginate();
        return UserResource::collection($users);
    }

    public function posts($id)
    {
        $post =  Post::with([ 'comments', 'images', 'videos', 'category', 'tags'])->where('author_id', $id)->get();
        return PostResource::collection($post);
    }
}
