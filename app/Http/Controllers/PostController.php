<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Intervention\Image\ImageManagerStatic as Image;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::get();

        $currentPosts = $posts->take(-5);

        return view('posts.index', compact('posts', 'currentPosts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'body' => 'required',
            'postcover' => 'required',
        ]);
            
        $imagePath = request('postcover')->store('upload', 'public');

        // resize the image so that the largest side fits within the limit; the smaller
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(750, 350);
        $image->save();

        auth()->user()->posts()->create([
            'title' => $data['title'],
            'category' => $data['category'],
            'body' => $data['body'],
            'postcover' => $imagePath
        ]);

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $post)
    {
        $currentPosts = Post::get()->take(-5);
        $post = Post::where('slug', $post)->firstOrfail();
        return view('posts.show', compact('post', 'currentPosts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($post)
    {
        $post = Post::where('slug', $post)->firstOrfail();

        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Post $post)
    {
        $data = $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'body' => 'required',
            'postcover' => '',
        ]);

        if(request('image')){
            $imagePath = request('image')->store('profile', 'public');
    
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(250, 250);
            
            $image->save();
            $imgArr = ['image' => $imagePath];
        }

        auth()->user()->posts()->update(array_merge(
            $data,
            $imgArr ?? []
        ));

        return redirect('/posts/'.$post->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($post)
    {
        $post = Post::where('slug', $post)->firstOrfail();
        
        $post->delete();

        return redirect()->route('index');
    }
}
