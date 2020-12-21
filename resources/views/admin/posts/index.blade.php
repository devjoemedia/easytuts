@extends('./admin.app')
@section('content')
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Dashboard</span>
            <h3 class="page-title">Posts</h3>
        </div>
    </div>
    <!-- End Page Header -->
       <div class="card">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Author</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Created At</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
            <tr>
                <td scope="row">1</td>
                <td>{{$post->user->name}} ...</td>
                <td>{{Str::substr($post->title,0, 40)}} ...</td>
                <td>Web Development</td>
                <td>{{$post->created_at}}</td>
                <td class="d-flex">
                  <a class="btn btn-primary mr-1" href="{{ route('posts.edit', $post->slug) }}">view</a>
                  <form action="{{ route('posts.destroy', $post->slug) }}"  method="POST" >
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
       
@endsection
