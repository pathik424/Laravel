@extends('layout.app')


@section('admin')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Add New Class</h1>
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
                    <label for="exampleInputEmail1">Subject Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$edit->name}}"  name="name" placeholder="Enter Name">
                  </div>
                </div>

                <div class="form-group" style="margin-left: 20px">

                    @if ($edit->type == "theory")
                    <label for="">Select Type</label>
                    <select name="type" class="form-control">
                        <option value="">select type</option>
                        <option value="theory" selected >Theory</option>
                        <option value="practical">Practical</option>
                    </select>
                </div>

                @else
                    <label for="">Select Type</label>
                    <select name="type" class="form-control">
                        <option value="">select type</option>
                        <option value="theory" >Theory</option>
                        <option value="practical" selected >Practical</option>
                    </select>
                </div>

                @endif
                @if ($edit->active == true)

                <label class="col-form-label col-md-10">Status</label>
                <div class="col-md-10">
                <div class="radio">
                <label class="col-form-label">
                <input type="radio" name="status" value="1"> Active
                </label>
                </div>
                <div class="radio">
                <label class="col-form-label">
                <input type="radio" name="status" checked value="0"> In Active
                </label>
                </div>
                </div>
                </div>

                @else

                <label class="col-form-label col-md-10">Status</label>
                <div class="col-md-10">
                <div class="radio">
                <label class="col-form-label">
                <input type="radio" name="status" checked value="1"> Active
                </label>
                </div>
                <div class="radio">
                <label class="col-form-label">
                <input type="radio" name="status" value="0"> In Active
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


