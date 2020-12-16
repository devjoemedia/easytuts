<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class TutorialsController extends Controller
{
  

  public function getAll()
  {
      
      $posts = Post::paginate(8);
      $categories = Category::get()->take(10);;
      $currentPosts = Post::get()->take(-5);;

      return view('pages.all', compact('posts', 'categories','currentPosts'));
  }

  public function getSingle($slug)
  {
      
      $post = Post::where('slug', $slug)->firstOrfail();
      $tags = $post->tags;
      return view('pages.single', compact('post', 'tags'));
  }
}
