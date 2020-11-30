<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class TutorialsController extends Controller
{
  

  public function getAll()
  {
      
      $posts = Post::all();

      return view('pages.all', compact('posts'));
  }
  public function getSingle($slug)
  {
      
      $post = Post::where('slug', $slug)->firstOrfail();

      return view('pages.single', compact('post'));
  }
}
