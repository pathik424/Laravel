@extends('Backend.app')


@section('backend')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Update User</h4>
              <p class="card-description">
                Update User Form
              </p>
              <form class="forms-sample" method="POST">
                @csrf
                <div class="form-group">
                  <label for="exampleInputUsername1">Name</label>
                  <input type="text" class="form-control"  Name="name" value= "{{ $edituser->name }}" id="exampleInputUsername1" placeholder="Name">
                </div>
                {{-- <div class="form-group">
                  <label for="exampleInputUsername1">Username</label>
                  <input type="text" class="form-control" name="username" value= "{{ $edituser->username }}" id="exampleInputUsername1" placeholder="Username">
                </div> --}}
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" Name="email" value= "{{ $edituser->email }}" id="exampleInputEmail1" placeholder="Email">
                </div>
                {{-- <div class="form-group">
                  <label for="exampleInputEmail1">City</label>
                  <input type="text" class="form-control" Name="city" value= "{{ $edituser->city }}" id="exampleInputEmail1" placeholder="City">
                </div> --}}
                {{-- <div class="form-group">
                  <label for="exampleInputEmail1">Age</label>
                  <input type="number" class="form-control" Name="age" value= "{{ $edituser->age }}" id="exampleInputEmail1" placeholder="Age">
                </div> --}}
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" name="password" class="form-control" value= "{{ $edituser->password}}" id="exampleInputPassword1" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            </div>
          </div>
        </div>
        </div>
        </div>

        @endsection
