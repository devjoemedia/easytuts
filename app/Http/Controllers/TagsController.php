<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
class TagsController extends Controller
{
    public function getByTagName(Request $request)
    {
        $tag = $request->query('tag');
        if($tag) {
            dd($tag);
        }
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
