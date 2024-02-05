@extends('Backend.app')


@section('backend')


<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Brand</h4>
              <p class="card-description">
                Edit brand
              </p>
              <form class="forms-sample" action="{{ url('/admin/edit-brand/'.$edit->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- @method('put') --}}


                <div class="mb-3">
                    <label for="category">Select Category</label>
                    <select name="cat_id"  class="form-control">


                        @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{$category->id == $edit->cat_id ? 'selected':''}}> {{--ana thi e thse ke brand ma badhi j category show thse jyare update karse tyare brandcontroller ma edit ma jovu--}}
                            {{$category->name}}</option>
                        @endforeach


                    </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputUsername1">Name</label>
                  <input type="text" class="form-control" name='name' value= "{{ $edit->name }}" id="exampleInputUsername1" placeholder="name">
                </div>


                <div class="form-group">
                  <label for="exampleInputUsername1">Description</label>
                  <input type="text" class="form-control" name='description' value= "{{ $edit->description }}" id="exampleInputUsername1" placeholder="name">
                </div>

                <div class="input-block mb-3 row">
                    @if ($edit->visible == true)
                    <label class="col-form-label col-md-2">Visible</label>
                    <div class="col-md-10">
                    <div class="radio">
                    <label class="col-form-label">
                    <input type="radio" name="visible" checked  value="1"> Visible
                    </label>
                    </div>
                    <div class="radio">
                    <label class="col-form-label">
                    <input type="radio" name="visible" value="0"> Not Visible
                    </label>
                    </div>
                    </div>
                    @else

                    <label class="col-form-label col-md-2">Visible</label>
                    <div class="col-md-10">
                    <div class="radio">
                    <label class="col-form-label">
                    <input type="radio" name="visible"  value="1"> Visible
                    </label>
                    </div>
                    <div class="radio">
                    <label class="col-form-label">
                    <input type="radio" name="visible" checked value="0"> Not Visible
                    </label>
                    </div>
                    </div>
                    @endif

                    </div>

                <div class="form-group">
                    <label for="exampleInputUsername1">Image</label>
                    <input type="file" class="form-control" name='image' id="exampleInputUsername1" placeholder="description">
                    <img src="/{{ $edit->image }}" alt="" style="width: 100px" >
                </div>



                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                {{-- <button class="btn btn-light">Cancel</button> --}}
              </form>
            </div>
          </div>
        </div>
    </div>

@endsection
