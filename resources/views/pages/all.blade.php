@extends('layouts.app')
@section('content')
    <div class="content container">
        <!-- Showcase OR Slider -->
        <div class="showcase">
            <!-- Articles -->
            <div class="articles">
                <h1 class="heading">Tutorials</h1>
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
    </div>
@endsection
@section('mainfooter')
    {{-- Main Footer --}}
    <x-footer />
@endsection
