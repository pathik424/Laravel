@extends('Backend.app')


@section('admin')


<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Category</h4>
              <p class="card-description">
                Add New Brand
              </p>
              <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="category">Select Category</label>
                    <select name="cat_id"  class="form-control">

                        @foreach ($cat as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach

                    </select>
                </div>


                <div class="form-group">
                  <label for="exampleInputUsername1">Name</label>
                  <input type="text" class="form-control" name='name' id="exampleInputUsername1" placeholder="name">
                </div>


                <div class="form-group">
                  <label for="exampleInputUsername1">Description</label>
                  <input type="text" class="form-control" name='description' id="exampleInputUsername1" placeholder="Description">
                </div>

                <div class="input-block mb-3 row">
                  <label class="col-form-label col-md-2">Visible</label>
                  <div class="col-md-10">
                  <div class="radio">
                  <label class="col-form-label">
                  <input type="radio" name="visible" value="1"> Visible
                  </label>
                  </div>
                  <div class="radio">
                  <label class="col-form-label">
                  <input type="radio" name="visible" value="0"> Not Visible
                  </label>
                  </div>
                  </div>
                  </div>

                <div class="form-group">
                    <label for="exampleInputUsername1">Image</label>
                    <input type="file" class="form-control" name='image' id="exampleInputUsername1" placeholder="description">
                </div>



                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                {{-- <button class="btn btn-light">Cancel</button> --}}
              </form>
            </div>
          </div>
        </div>
    </div>

@endsection
