@extends('Backend.app')


@section('backend')


<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Product</h4>
              <p class="card-description">
                Add Product
              </p>
              <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                  <label for="exampleInputUsername1">Name</label>
                  <input type="text" class="form-control" name='name' id="exampleInputUsername1" placeholder="name">
                </div>


                <div class="form-group">
                  <label for="exampleInputUsername1">Description</label>
                  <input type="text" class="form-control" name='description' id="exampleInputUsername1" placeholder="Description">
                </div>

                <div class="form-group">
                  <label for="exampleInputUsername1">Price</label>
                  <input type="text" class="form-control" name='price' id="exampleInputUsername1" placeholder="Price">
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
