<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        $tags = Tag::count();
        $categories = Category::count();

        $allUsers = User::count();

        return view('admin.index', compact('posts','allUsers','tags','categories'));
    }
}
