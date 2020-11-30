<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
     
  public function index()
  {
      $posts = Post::paginate(6);

      $currentPosts = $posts->take(-5);

      return view('pages.index', compact('posts', 'currentPosts'));
  }
}
