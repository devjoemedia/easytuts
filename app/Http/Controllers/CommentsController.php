<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CommentsController extends Controller
{
    public function store(Request $request,Post $postId)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required'
        ]);
        $postId->comments()->create($data);
        
        return back();
    }
}
