@extends('app')
@section('navigation')
    <header>
    <nav class="navbar">
        <a href="index.php" class="logo">
            <img src="img/logo.png" alt="logo img" />
        </a>
        <ul class="menu-lg">
            <li class="nav-item">
                <a href="#" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="blog.php" class="nav-link">News</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Politics</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Business</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Sports</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Entertainment</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Technology</a>
            </li>
        </ul>
        <div id="search">
            <form method="post">
                <input type="text" class="searchText" name="SearchText" placeholder="Find your Article...." />
                <input type="submit" value="Search" name="Search" class="btn-primary search-btn" />
            </form>
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
        <a href="blog.html" class="nav-link">News</a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">Politics</a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">Business</a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">Sports</a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">Entertainment</a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">Technology</a>
    </li>
    </ul>

@endsection