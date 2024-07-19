@extends('layouts.admin')

@section('content')



<div class="row">
    <div class="col-md-12">
        
@if(session('message'))
<h1 class="alert alert-success"> {{session('message')}}</h1>
@endif

        <div class="card">
            <div class="card-header">
                <h3>
                    Edit Colors
                      <a href="{{url('/admin/colors')}}" class="btn btn-primary float-end">Back </a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{url('admin/colors/'.$color->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="name">Color Name</label>
                        <input type="text" name="name" value="{{$color->name}}" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="name">Color Code</label>
                        <input type="text" name="code" value="{{$color->code}}" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="name">Status</label>
                        <input type="checkbox" name="status" {{$color->status == '1' ? 'checked':''}}>
                    </div>
                    
                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-success float-end">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>


@endsection