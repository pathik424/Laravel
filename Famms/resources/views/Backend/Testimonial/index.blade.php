@extends('Backend.app')


@section('backend')






<div class="col-lg-10 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Testimonial Data</h4>
        <p class="card-description">
          {{-- Add class <code>.table-{color}</code> --}}
        </p>

        <div class="card-body">
            <a href="/admin/add-testimonial" class="btn btn-primary mb-4">
                    Add Testimonial
            </a>

            @if (session('testimonial'))
            <div class="alert alert-success" role="alert">
                {{ session('testimonial') }}
            </div>
            @endif

            @if (session('updatetestimonial'))
            <div class="alert alert-success" role="alert">
                {{ session('updatetestimonial') }}
            </div>
            @endif

            @if (session('delete'))
            <div class="alert alert-danger" role="alert">
                {{ session('delete') }}
            </div>
            @endif



        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>


                  <th>
                      Customer Name
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                        Profile Pic
                    </th>
                <th>
                    Action
                </th>
              </tr>
            </thead>
            <tbody>

                @forelse ($test as $tests)



                <tr class="table-info">

                    <td>
                        {{$tests->cusname}}
                    </td>
                    <td>
                        {{$tests->description}}
                    </td>
                    <td>
                        <img src="/{{ $tests->profilepic }}" height="100px" width="100px" alt="No image found"></td>

                    </td>



                        <td>
                    <a href="{{ url('admin/edit-testimonial/' . $tests->id) }}" class="btn btn-sm btn-primary">Update</a>
                   <Form action="{{ url('admin/delete-testimonial/' . $tests->id) }}" method="post">
                    @csrf
                    @method('delete')

                       <button href="" class="btn btn-sm btn-danger">Delete</button>
                    </Form>
                </td>


                @empty
                <tr>
                    <td colspan="5">No Product Available</td>
                </tr>


            </tr>
            @endforelse

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


@endsection
