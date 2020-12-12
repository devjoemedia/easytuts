<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
