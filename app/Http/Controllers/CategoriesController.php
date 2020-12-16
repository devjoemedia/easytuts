<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class CategoriesController extends Controller
{
    public function byCategory(Request $request)
    {
        $category = $request->query('category');

        $categories = Category::get()->take(10);;
        $currentPosts = Post::get()->take(-5);

        $searchCategory = Category::find($category);
        $searchTerm = '/ By Category / '. $searchCategory->title;

        $posts = Post::where('category', $category)->paginate(8);

        return view('pages.all', compact('posts','categories','currentPosts','searchTerm'));
       
    }
    
    public function index()
    {
        $categories = Category::get();

        return view('admin.categories.index', compact('categories'));
    }

    

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'title' => 'required',
        ]);
            
        Category::create($data);

        return back();
    }
    

    
    public function destroy(Category $category)
    {
        $category->delete();

        return back();
    }
}
