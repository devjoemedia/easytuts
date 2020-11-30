<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function getByTagName(Request $request)
    {
        $tag = $request->query('tag');
        dd($tag);
    }
}
