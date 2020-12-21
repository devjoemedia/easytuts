@extends('layouts.app')
@section('content')
    <div class="content container">
        <!-- Showcase OR Slider -->
        <div class="showcase">
            <!-- Articles -->
            <div class="articles">
                <h1 class="heading">Tutorials {{$searchTerm}}</h1>
                <div>
                    @foreach ($posts as $post)
                        <div class="article">
                            @if ($post->postcover)
                                <img src="/storage/{{ $post->postcover }}" />
                            @else
                                <img src="/img/tech-1.jpg" />
                            @endif
                            <p class="desc">
                                <strong>By</strong> : {{ $post->user->name }}. <strong>On:</strong>
                                <small>{{ $post->created_at->toDateString() }}</small> .
                            </p>
                            <div class="article-body">
                                <h3>{{ $post->title }}</h3>

                            </div>
                            <div class="article-footer">
                                <a href="/tutorials/{{ $post->slug }}" class="button-primary">More</a>
                                <div class="article-activities">
                                    <span>
                                        <i class="far fa-comment"></i>
                                        {{$post->comments->count()}} comments
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{$posts->links()}}
            </div>
        </div>
        {{-- Sidebar --}}
        <x-sidebar :currentPosts="$currentPosts" :categories="$categories" />
    </div>
@endsection
@section('mainfooter')
    {{-- Main Footer --}}
    <x-footer />
@endsection
