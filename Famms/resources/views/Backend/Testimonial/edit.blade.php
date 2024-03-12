@extends('Backend.app')


@section('backend')

{{-- {{dd('inside if')}} --}}

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Testimonial</h4>
              <p class="card-description">
                Add New Testimonial
              </p>
              <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                @csrf



                <div class="form-group">
                  <label for="exampleInputUsername1">Customer Name</label>
                  <input type="text" class="form-control" name='cusname' value="{{$edit->cusname}}" id="exampleInputUsername1" placeholder="Eye Product Name">
                </div>


                <div class="form-group">
                  <label for="exampleInputUsername1">Description</label>
                  <input type="text" class="form-control" name='description' id="exampleInputUsername1"  value="{{$edit->description}}" placeholder="price">
                </div>



                <div class="form-group">
                    <label for="exampleInputUsername1">Profile Pic</label>
                    <input type="file" class="form-control" name='profilepic' id="exampleInputUsername1" placeholder="Profile Pic">
                    <img src="/{{ $edit->profilepic }}" alt="" width="300px" >
                </div>



                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                {{-- <button class="btn btn-light">Cancel</button> --}}
              </form>
            </div>
          </div>
        </div>
    </div>

@endsection
