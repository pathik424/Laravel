@extends('layout.app')


@section('admin')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Add New Admin</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">

              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Class Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value={{$edit->name}} name="name" placeholder="Enter Name">
                  </div>
                  </div>
                  <div class="input-block mb-3 row" style="margin-left: 20px">

                    @if ($edit->active == true)

                    <label class="col-form-label col-md-10">Status</label>
                    <div class="col-md-10">
                    <div class="radio">
                    <label class="col-form-label">
                    <input type="radio" name="active" checked value="1"> Active
                    </label>
                    </div>
                    <div class="radio">
                    <label class="col-form-label">
                    <input type="radio" name="active" value="0"> In Active
                    </label>
                    </div>
                    </div>
                    </div>

                    @else

                    <label class="col-form-label col-md-10">Status</label>
                    <div class="col-md-10">
                    <div class="radio">
                    <label class="col-form-label">
                    <input type="radio" name="active" value="1"> Active
                    </label>
                    </div>
                    <div class="radio">
                    <label class="col-form-label">
                    <input type="radio" name="active" checked value="0"> In Active
                    </label>
                    </div>
                    </div>
                    </div>

                    @endif





                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>
            </div>
            </div>
            <!-- /.card -->

  @endsection


