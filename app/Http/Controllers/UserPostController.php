<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    public function index(User $user)
    {
        return view('posts.user-posts', [
            'user' => $user,
            'posts' => $user->posts()->with('user', 'likes')->latest()->paginate(20)
        ]);
    }
}
