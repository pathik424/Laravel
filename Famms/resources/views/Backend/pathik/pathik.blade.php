@extends('Backend.app')


@section('admin')




<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Brand Data</h4>
        <p class="card-description">
          {{-- Add class <code>.table-{color}</code> --}}
        </p>

        <div class="card-body">
            <a href="/admin/add-pathik" class="btn btn-primary mb-4">
                    Add Product
            </a>
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>


                <th>
                    Image
                </th>
                <th>
                    Description
                </th>
                <th>
                    Price
                </th>
                <th>
                    Action
                </th>
              </tr>
            </thead>
            <tbody>

                @forelse ($pat as $products)



                <tr class="table-info">

                    <td>
                        <img src="/{{ $products->image }}" height="100px" width="100px" alt="No image found"></td>

                    </td>
                    <td>
                        {{$products->description}}
                    </td>
                    <td>
                        {{$products->price}}
                    </td>


                        <td>
                    <a href="" class="btn btn-sm btn-primary">Update</a>
                   <Form action="" method="post">
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
