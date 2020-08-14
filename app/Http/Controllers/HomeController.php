<?php

namespace App\Http\Controllers;

use App\Category;
use App\Poll;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $post = Post::count();
        $categorie = Category::count();
        $users = User::count();
        $tags = Tag::count();
        // $polls = Poll::count();
        return view('home', compact('post', 'categorie', 'users', 'tags'));
    }
}
