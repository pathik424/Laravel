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
                {{-- <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Class Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  name="class_id" placeholder="Enter Name">
                  </div>
                </div> --}}

                <div class="form-group" style="margin-left: 20px">
                    <label for="">Select Type</label>
                    <select name="class_id" class="form-control">
                        <option value="">select type</option>
                        @foreach ($studentclass as $value )
                        <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group" style="margin-left: 20px">
                    <label for="">Subject Name</label>

                    @foreach ($studentsubject as $subject)
                    <div>
                        <label for="">
                            <input type="checkbox" name="subject_id" value="{{$subject->id}}"> {{$subject->name}}
                        </label>
                    </div>

                    @endforeach



                </div>

                  <div class="input-block mb-3 row" style="margin-left: 20px">
                    <label class="col-form-label col-md-10">Status</label>
                    <div class="col-md-10">
                    <div class="radio">
                    <label class="col-form-label">
                    <input type="radio" name="status" value="1"> Active
                    </label>
                    </div>
                    <div class="radio">
                    <label class="col-form-label">
                    <input type="radio" name="status" value="0"> In Active
                    </label>
                    </div>
                    </div>
                    </div>



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


