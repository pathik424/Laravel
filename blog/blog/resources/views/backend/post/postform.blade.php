@extends('backend.app')








@section('admin')




<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic form elements</h4>
        <p class="card-description">
          Basic form elements
        </p>
        <form method="post" enctype="multipart/form-data"  class="forms-sample">
            @csrf

            <div class="form-group">
                <label for="exampleInputName1">Image</label>
                <input type="file" name="image" class="form-control" id="exampleInputName1" placeholder="Upload Your Image">
              </div>

          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>

          <div class="form-group">
            <label for="exampleInputName1">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputName1" placeholder="title">
          </div>

          <div class="form-group">
            <label for="exampleSelectGender">Posted By</label>
              <select class="form-control" name="postedby" id="exampleSelectGender">
                <option>Admin</option>
                <option>Users</option>
              </select>
            </div>

            <div class="form-group">
              <label for="exampleTextarea1">Body</label>
              <textarea Name = "body" class="form-control" id="exampleTextarea1" rows="4"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputName1">Description</label>
                <input type="text" name="description" class="form-control" id="exampleInputName1" placeholder="Description">
              </div>



          <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
          {{-- <button class="btn btn-light">Cancel</button> --}}
        </form>
      </div>
    </div>
  </div>

  @endsection
