@extends('./admin.app')
@section('content')
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Dashboard</span>
            <h3 class="page-title">users</h3>
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
                  <th>Name</th>
                  <th>Email</th>
                   <th>Date Registed</th>
                   <th>Details</th>
                 </tr>
              </thead>
              <tbody>
                @foreach ($allUsers as $user)
                <tr>
                    <td scope="row">1</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at->toDateString()}}</td>
                    <td class="d-flex">
                      <a class="btn btn-primary mr-1" href="{{ route('users.show', $user->id)}}">view</a>
                      <form  action="{{route('users.destroy', $user->id)}}"  method="POST">
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
