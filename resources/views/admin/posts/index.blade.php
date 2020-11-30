@extends('layouts.app')
@section('content')
    <div class="content container">
        <!-- Showcase OR Slider -->
        <div class="showcase">
            <div class="showcase-inner">
                @foreach ($currentPosts as $post)
                    <a href="{{route('posts.show', $post->slug)}}" class="barnners">
                        <div class="banner fade">
                            <img src="/storage/{{$post->postcover}}" />
                        </div>
                    </a>
                @endforeach
                
                <div class="indicators">
                    @foreach ($currentPosts as $post)
                        <div class="indicator"></div>
                    @endforeach
                </div>
            </div>
            <!-- Articles -->
            <div class="articles">
                <h2 class="heading">Our Articles</h2>
                <div>
                    @foreach ($posts as $post)
                        <div class="article">
                            @if ($post->postcover)
                                <img src="/storage/{{ $post->postcover }}" />
                            @else
                                <img src="/img/tech-1.jpg" />
                            @endif
                            <p class="desc">
                                <strong>By</strong> : {{$post->user->name}}. <strong>On:</strong>
                                <small>{{ $post->created_at->toDateString() }}</small> .
                            </p>
                            <div class="article-body">
                                <h3>{{ $post->title }}</h3>

                            </div>
                            <div class="article-footer">
                                <a href="{{route('posts.show', $post->slug)}}" class="button-primary">More</a>
                                <div class="article-activities">
                                    <span>
                                        <i class="far fa-comment"></i>
                                        4 comments
                                    </span>
                                    <span>
                                        <i class="far fa-heart"></i>
                                        23 likes
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- Sidebar --}}
        <x-sidebar :currentPosts="$currentPosts" />
    </div>
@endsection
@section('mainfooter')
    {{-- Main Footer --}}
    <x-footer />
@endsection
