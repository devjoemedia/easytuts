@extends('layouts.app')
@section('content')
    <!-- Edit Post  -->
    <div class="row">
        <div class="col-md-8 mx-auto mt-5">
            <div>

            </div>
            <div class="card">
                <div class=" card-header  bg-dark text-white  mb-3">
                    <h5>Edit Post</h5>
                </div>
                <div class="p-5 post-form">
                    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="Title" class="form-control-label">Tittle</label>
                            <input type="text" value="{{ $post->title }}" name="title">
                            @error('title')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="category" class="form-control-label">Category</label>
                            <select name="category" type="text">

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
                            <select name="tag" class="select-tags"  multiple="multiple" >
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
        </div>
    </div>

@endsection
