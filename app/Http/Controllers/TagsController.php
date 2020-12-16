<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Post;
class TagsController extends Controller
{
    public function getByTagName(Request $request)
    {
        $tag = $request->query('tag');
        $categories = Category::get()->take(10);;
        $currentPosts = Post::get()->take(-5);

        $searchTerm = '/ By Tag / '. $tag;

        $posts = Post::whereHas(
            'tags', function($q) use ($tag) {
                
                $q->where("name", $tag);
            }
        )->paginate(8);


        return view('pages.all', compact('posts','categories','currentPosts','searchTerm'));
       
    }
    public function index()
    {
        $tags = Tag::get();

        return view('admin.tags.index', compact('tags'));
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
        ]);
            
        Tag::create($data);

        return back();
    }
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return back();
    }
}
