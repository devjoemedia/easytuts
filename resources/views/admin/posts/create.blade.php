@extends('layouts.app')
@section('content')
    <!-- Add Post  -->
    <div class="row">
        <div class="col-md-8 mx-auto mt-5">
            <div class="card">
                <div class="card-header bg-dark text-white mb-3">
                    <h5>Add Post</h5>
                </div>
                <div class="p-5 post-form">
                  <form action="{{ route('posts.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title" class="form-control-label">Title</label>
                            <input type="text"  name="title">
                        </div>
                        <div class="form-group">
                            <label for="category" class="form-control-label">Category</label>
                            <select name="category" type="text" >
                                <option>Catecory</option>
                                <option value="css">CSS</option>
                                <option value="javascript">JAVASCRIPT</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tag" class="form-control-label">tag</label>
                            <select name="tag" class="select-tags"  multiple="multiple" >
                                <option>Tag</option>
                            </select>
                        </div>
                        <div class="form-group bg-faded p-3">
                            <label for="postcover">Image Upload</label>
                            <input type="file"  id="file" name="postcover">
                            <small class="form-text text-muted" id="fileHelp">Max Size 3MB </small>
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea name="body" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="button-primary">Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
