@extends('./admin.app')
@section('content')
    <!-- Edit Post  -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Blog Posts</span>
            <h3 class="page-title">Add New Post</h3>
        </div>
    </div>
    <!-- End Page Header -->
    <div class="row">
        <div class="col-lg-9 col-md-12">
            <!-- Add New Post Form -->
            <div class="card card-small mb-3">
                <div class="card-body">
                    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="Title" class="form-control-label">Tittle</label>
                            <input class="form-control" type="text" value="{{ $post->title }}" name="title">
                            @error('title')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="category" class="form-control-label">Category</label>
                            <select class="form-control" name="category" type="text">

                                <option>Catecory</option>
                                <option value="css">CSS</option>
                                <option value="javascript">JAVASCRIPT</option>
                            </select>
                            @error('category')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tag" class="form-control-label">tag</label>
                            <select name="tag" class="select-tags form-control" multiple="multiple">
                                <option>Tag</option>
                            </select>
                        </div>
                        <div class="form-group bg-faded p-3">
                            <label for="file">Image Upload</label>
                            <input type="file" class="form-control-file" id="file" name="Image">
                            <small class="form-text text-muted" id="fileHelp">Max Size 3MB </small>
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea id="editor1" name="body" class="form-control">{{ $post->body }}</textarea>
                            @error('body')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
            <!-- / Add New Post Form -->
        </div>
        <div class="col-lg-3 col-md-12">
            <!-- Post Overview -->
            <div class='card card-small mb-3'>
                <div class="card-header border-bottom">
                    <h6 class="m-0">Actions</h6>
                </div>
                <div class='card-body p-0'>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <span class="d-flex mb-2">
                                <i class="material-icons mr-1">flag</i>
                                <strong class="mr-1">Status:</strong> Draft
                                <a class="ml-auto" href="#">Edit</a>
                            </span>
                            <span class="d-flex mb-2">
                                <i class="material-icons mr-1">visibility</i>
                                <strong class="mr-1">Visibility:</strong>
                                <strong class="text-success">Public</strong>
                                <a class="ml-auto" href="#">Edit</a>
                            </span>
                            <span class="d-flex mb-2">
                                <i class="material-icons mr-1">calendar_today</i>
                                <strong class="mr-1">Schedule:</strong> Now
                                <a class="ml-auto" href="#">Edit</a>
                            </span>
                            <span class="d-flex">
                                <i class="material-icons mr-1">score</i>
                                <strong class="mr-1">Readability:</strong>
                                <strong class="text-warning">Ok</strong>
                            </span>
                        </li>
                        <li class="list-group-item d-flex px-3">
                            <button class="btn btn-sm btn-outline-accent">
                                <i class="material-icons">save</i> Save Draft</button>
                            <button class="btn btn-sm btn-accent ml-auto">
                                <i class="material-icons">file_copy</i> Publish</button>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- / Post Overview -->
            <!-- Post Overview -->
            <div class='card card-small mb-3'>
                <div class="card-header border-bottom">
                    <h6 class="m-0">Categories</h6>
                </div>
                <div class='card-body p-0'>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-3 pb-2">
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" class="custom-control-input" id="category1" checked>
                                <label class="custom-control-label" for="category1">Uncategorized</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" class="custom-control-input" id="category2" checked>
                                <label class="custom-control-label" for="category2">Design</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" class="custom-control-input" id="category3">
                                <label class="custom-control-label" for="category3">Development</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" class="custom-control-input" id="category4">
                                <label class="custom-control-label" for="category4">Writing</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" class="custom-control-input" id="category5">
                                <label class="custom-control-label" for="category5">Books</label>
                            </div>
                        </li>
                        <li class="list-group-item d-flex px-3">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="New category"
                                    aria-label="Add new category" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-white px-2" type="button">
                                        <i class="material-icons">add</i>
                                    </button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- / Post Overview -->
        </div>
    </div>

@endsection
