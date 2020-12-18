<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>QB's | Blog</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet" />
    <link href="{{ asset('/ckeditor/plugins/codesnippet/lib/highlight/styles/monokai_sublime.css') }}" rel="stylesheet">
    {{-- styles --}}
    <script src="https://kit.fontawesome.com/48172a145b.js" crossorigin="anonymous"></script>
    <link href="{{ asset('/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

</head>

<body>

    {{-- Navigations --}}
    <header>
        <nav class="navbar">
            <a href="/" class="logo">
                Devjoe media
            </a>
            <ul class="menu-lg">
                <li class="nav-item">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('tutorials.all')}}" class="nav-link">Tutorials</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Resources</a>
                </li>
            </ul>
            <div class="navbar-left">
                @auth
                    <h4>{{ auth()->user()->username }}</h4>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="button-primary">Logout</button>
                    </form>
                @endauth
                @guest
                    <a href="/login" class="button-primary">Login</a>
                    <a href="/register" class="button-primary">Join us</a>
                @endguest
            </div>
            <div class="menu-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>

        </nav>
    </header>
    <!-- -----------mobile menu----------- -->
    <ul class="mobile">
        <a href="#" class="btn-close">X</a>
        <li class="nav-item">
            <a href="#" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
            <a href="blog.html" class="nav-link">Tutorials</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">Resources</a>
        </li>
    </ul>
    {{-- Body --}}
    <main class="main">
        @yield('content')
        {{-- @yield('sidebar') --}}
    </main>

    @yield('mainfooter')


    {{-- scripts --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('/ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js') }}"></script>
    <script src="{{ asset('/js/select2.min.js') }}"></script>

    <script>
        var config = {
            extraPlugins: "codesnippet",
            codeSnippet_theme: "monokai_sublime"
        };

        CKEDITOR.replace("body", config);

        hljs.initHighlightingOnLoad();

      
        $('.select-tags').select2();

    </script>
</body>

</html>
