@extends('layouts.app')
@section('content')
    <div class="container content ">
        <!-- Post -->
        <div class="post-content">
            <h2 class="post-title">{{ $post->title }}</h2>
            <div class="post-tags">
                <ul>
                    <h3>Tags: </h3>
                    @foreach ($tags as $tag)
                        <li><a href="{{ route('tutorials.tag',['tag'=>$tag->name])}}">{{$tag->name}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="post-header">
                <p class="desc">
                    <strong>By</strong> : {{ $post->user->name }} On {{ $post->created_at->toDateString() }};.
                </p>
                <div>
                    <span>
                        <i class="far fa-comment"></i>
                        4 comments
                    </span>
                    <span>
                        <i class="far fa-heart"></i>
                        23 likes
                    </span>
                </div>
                @can('update', $post)
                    <div class="post-actions">
                        <a href="/posts/{{ $post->slug }}/edit" class="button-primary">Edit</a>
                        <form action="{{ route('posts.destroy', $post->slug) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button-primary">Delete</button>
                        </form>
                    </div>
                @endcan
            </div>

            <div class="post">
                @if ($post->postcover)
                    <img src="/storage/{{ $post->postcover }}" />
                @else
                    <img src="/img/tech-1.jpg" />
                @endif
                <div class="post-body">
                    <p>
                        {!! $post->body !!}
                    </p>
                </div>
            </div>
            <div class="comment">
                <form class="comment__form" action="{{ route('comments.store ',$post->id)}}" method="post">
                    @csrf
                    <div>
                        <div>
                            <label for="name">Name</label>
                        </div>
                        <div>
                            <input id="name" name="name" type="text" placeholder="name"  value="">
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="name">Email</label>
                        </div>
                        <div>
                            <input id="email" name="email" type="email" placeholder="email"  value="">
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="comment">Comment</label>
                        </div>
                        <div>
                            <textarea id="comment" name="comment" placeholder="comment"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="button-primary">Send</button>
                </form>
                <div class="post-comments">
                    <h2>Comments</h2>
                    @foreach ($post->comments as $comment)
                        <div class="post-comment">
                            By: <small>{{$comment->name}}</small>
                            <p>{{$comment->comment}}</p>
                        </div>
                        
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- Main Footer --}}
@section('mainfooter')
    <x-footer />
@endsection
