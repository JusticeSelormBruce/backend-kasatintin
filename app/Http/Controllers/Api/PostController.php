<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\shared\MasterPostController;
use App\Http\Resources\PostResource;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public $post_controller_controller;
    public function  __construct()
    {
        $this->post_controller_controller = new MasterPostController();
    }

    public function index()
    {
        return $this->post_controller_controller->index();
    }
    public function show($id)
    {
        $post = Post::with(['author', 'comments', 'images', 'videos', 'category','tags'])->whereId($id)->get();
        return PostResource::collection($post);
    }
}
