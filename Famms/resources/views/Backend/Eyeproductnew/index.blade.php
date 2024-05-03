@extends('Backend.app')


@section('backend')






<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Eyeproduct Data</h4>
        <p class="card-description">
          {{-- Add class <code>.table-{color}</code> --}}
        </p>

        <div class="card-body">
            <a href="/admin/add-neweyeproduct" class="btn btn-primary mb-4">
                    Add New Arrivals Product
            </a>

            @if (session('eyeproduct'))
            <div class="alert alert-success" role="alert">
                {{ session('eyeproduct') }}
            </div>
            @endif

            @if (session('updateeyeproduct'))
            <div class="alert alert-success" role="alert">
                {{ session('updateeyeproduct') }}
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
                      Name
                    </th>
                    <th>
                        Price
                    </th>
                    <th>
                        Image
                    </th>
                <th>
                    Action
                </th>
              </tr>
            </thead>
            <tbody>

                @forelse ($product as $products)



                <tr class="table-info">

                    <td>
                        {{$products->eyeproductname}}
                    </td>
                    <td>
                        {{$products->price}}
                    </td>
                    <td>
                        <img src="/{{ $products->image }}" height="100px" width="100px" alt="No image found"></td>

                    </td>



                        <td>
                    <a href="{{ url('admin/edit-neweyeproduct/' .$products->id) }}" class="btn btn-sm btn-primary">Update</a>
                   <Form action="{{ url('admin/delete-neweyeproduct/' .$products->id) }}" method="post">
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
