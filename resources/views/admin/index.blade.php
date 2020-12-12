@extends('./admin.app')
@section('content')
    <!-- Page Header -->
    <!-- Actions -->
    <section id="actions" class="py-4 mb-4 bg-faded ">

        <div class="row mx-auto w-75">
            <div class="col-md-3">
                <a href="{{ route('posts.create') }}" class="btn btn-primary btn-block">
                    <i class="fa fa-plus"></i> Add Post
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('categories.index') }}" class="btn btn-success btn-block">
                    <i class="fa fa-plus"></i> Add Category
                </a>
            </div>
            <div class="col-md-3">
                <a href="{{ route('tags.index') }}" class="btn btn-warning btn-block">
                    <i class="fa fa-plus"></i> Add Tag
                </a>
            </div>
        </div>
    </section>
    {{-- End actions --}}
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Dashboard</span>
            <h3 class="page-title">Blog Overview</h3>
        </div>
    </div>
    <!-- End Page Header -->
    <!-- Small Stats Blocks -->
    <div class="row">
        <div class="col-lg col-md-6 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Posts</span>
                            <h6 class="stats-small__value count my-3">{{ $posts->count() }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-4 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Comments</span>
                            <h6 class="stats-small__value count my-3">8,147</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-4 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Users</span>
                            <h6 class="stats-small__value count my-3">{{ $allUsers }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-4 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Tags</span>
                            <h6 class="stats-small__value count my-3">{{ $tags }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-4 col-sm-6 mb-4">
            <div class="stats-small stats-small--1 card card-small">
                <div class="card-body p-0 d-flex">
                    <div class="d-flex flex-column m-auto">
                        <div class="stats-small__data text-center">
                            <span class="stats-small__label text-uppercase">Categories</span>
                            <h6 class="stats-small__value count my-3">{{ $categories }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Small Stats Blocks -->
    <div class="row">
        <div class="col ">
            <div class="card p-2">
                <div>
                    <h4>Latest Post</h4>
                </div>
                <table class="table">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Date posted</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td scope="row">1</td>
                            <td>{{Str::substr($post->title,0, 40)}} ...</td>
                            <td>Web Development</td>
                            <td>{{$post->created_at}}</td>
                            <td><a href="details.html" class="btn btn-secondary">
                                    <i class="fa fa-angle-double-right"></i> Details</a>
                            </td>
                        </tr>
                            
                        @endforeach
                       
                    </tbody>
                </table>

                <nav class="ml-4">
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#" class="page-link ">Previous</a></li>
                        <li class="page-item active"><a href="#" class="page-link ">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>

                    </ul>
                </nav>
            </div>
        </div>

    @endsection
