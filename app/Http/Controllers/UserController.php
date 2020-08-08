<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with(['posts', 'comments'])->paginate(50);
        return view('model.user.index', compact('users'));
    }
}
