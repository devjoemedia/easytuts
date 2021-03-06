@extends('layouts.app')
@section('content')
    <div class="container content ">
        <!-- Post -->
        <div class="post-content">
            <h2 class="post-title">{{ $post->title }}</h2>
            <div class="post-tags">
                <ul>
                    <h3>Tags: </h3>
                    <li>Web development</li>
                    <li>Javascript</li>
                    <li>Sass</li>
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
                        <a href="{{route('posts.edit', $post->slug)}}" class="button-primary">Edit</a>
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
        </div>
        {{-- sidebar --}}
        {{--
        <x-sidebar :currentPosts="$currentPosts" /> --}}
    </div>
@endsection
@section('mainfooter')
    {{-- Main Footer --}}
    <x-footer />
@endsection
