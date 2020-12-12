@extends('./admin.app')
@section('content')
   <!-- Page Header -->
   <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Overview</span>
      <h3 class="page-title">User Profile</h3>
    </div>
  </div>
  <!-- End Page Header -->
  <!-- Default Light Table -->
  <div class="row">
    <div class="col-lg-4">
      <div class="card card-small mb-4 pt-3">
        <div class="card-header border-bottom text-center">
          <div class="mb-3 mx-auto">
            <img class="rounded-circle" src="/img/0.jpg" alt="User Avatar" width="110"> </div>
          <h4 class="mb-0">{{$user->name}}</h4>
          <span class="text-muted d-block mb-2">Project Manager</span>
          
        </div>
        <ul class="list-group list-group-flush">
          
          <li class="list-group-item p-4">
            <strong class="text-muted d-block mb-2">Description</strong>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eaque, quidem, commodi soluta qui quae minima obcaecati quod dolorum sint alias, possimus illum assumenda eligendi cumque?</span>
          </li>
        </ul>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="card card-small mb-4">
        <div class="card-header border-bottom">
          <h6 class="m-0">Account Details</h6>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-3">
            <div class="row">
              <div class="col">
                <form>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="feFirstName">First Name</label>
                      <input type="text" class="form-control" id="feFirstName" placeholder="First Name" value="{{$user->firstname}}"> </div>
                    <div class="form-group col-md-6">
                      <label for="feLastName">Last Name</label>
                      <input type="text" class="form-control" id="feLastName" placeholder="Last Name" value="{{$user->lastname}}"> </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="feEmailAddress">Email</label>
                      <input type="email" class="form-control" id="feEmailAddress" placeholder="Email" value="{{$user->email}}"> </div>
                    <div class="form-group col-md-6">
                      <label for="fePassword">Password</label>
                      <input type="password" class="form-control" id="fePassword" placeholder="Password"> </div>
                  </div>
                  <div class="form-group">
                    <label for="feInputAddress">Address</label>
                    <input type="text" class="form-control" id="feInputAddress" placeholder="1234 Main St"> </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="feInputCity">City</label>
                      <input type="text" class="form-control" id="feInputCity"> </div>
                    <div class="form-group col-md-4">
                      <label for="feInputState">State</label>
                      <select id="feInputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputZip">Zip</label>
                      <input type="text" class="form-control" id="inputZip"> </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <label for="feDescription">Description</label>
                      <textarea class="form-control" name="feDescription" rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio eaque, quidem, commodi soluta qui quae minima obcaecati quod dolorum sint alias, possimus illum assumenda eligendi cumque?</textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Update Account</button>
                </form>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
@endsection