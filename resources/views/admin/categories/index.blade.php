@extends('./admin.app')
@section('content')
    <!-- Page Header -->
    <div class="page-header row pl-5 py-4">
        <div class="col-md-6 col-sm-4 mb-2">
            <h3 class="page-title">Categories</h3>
        </div>
        <!-- Actions -->
        <div class="col-md-6">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input name="title" type="text" class="form-control" placeholder="category">
                    <button type="submit" class="input-group-text btn btn-primary" ><i class="fa fa-plus"></i> Add Category</button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Page Header -->
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
                            <th>Date Registed</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                        <tr>
                            <td scope="row">1</td>
                            <td>{{$category->title}}</td>
                            <td>{{$category->created_at->toDateString()}}</td>
                            <td>
                              <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
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
    </div>
@endsection
