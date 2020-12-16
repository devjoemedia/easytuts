<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PagesController extends Controller
{
     
  public function index()
  {
      $posts = Post::paginate(6);
      $categories = Category::get();

      $currentPosts = Post::get()->take(-5);

      return view('pages.index', compact('posts', 'currentPosts','categories'));
  }
}
