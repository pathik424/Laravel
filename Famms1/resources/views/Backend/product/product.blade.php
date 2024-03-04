@extends('Backend.app')


@section('admin')




<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Product Data</h4>
        <p class="card-description">
          {{-- Add class <code>.table-{color}</code> --}}
        </p>

        <div class="card-body">
            <a href="/admin/add-product" class="btn btn-primary mb-4">
                   Add Product
            </a>
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>

                <th>
                    Category
                  </th>

                  <th>
                    Brand
                  </th>

                  <th>
                  Product Name
                </th>
                <th>
                    Description
                </th>
                <th>
                    Image
                </th>
                <th>
                  Visible
                </th>
                <th>
                    Action
                </th>
              </tr>
            </thead>
            <tbody>

                @forelse ($product as $products)
                {{-- @dd($products); --}}



                <tr class="table-info">
                    <td>
                        {{-- {{dd($products->category->name)}} --}}
                        {{$products->category->name}}
                    </td>

                    <td>
                        {{-- {{dd($brands->category->name)}} --}}
                        {{$products->brand->name}}
                    </td>

                    <td>
                        {{$products->name}}
                    </td>
                    <td>
                        {{$products->description}}
                    </td>
                    <td>
                        <img src="" height="100px" width="100px" alt="No image found"></td>

                        <td>
                            @if ($products->visible === 0)
                            <h4>
                                <span class="badge badge-danger ">Not Visible</span>
                            </h4>
                            @else
                            <h4>
                                <span class="badge badge-success ">Visible</span>
                            </h4>
                            @endif
                        </td>

                        <td>
                    <a href="{{ url('/admin/edit-brand/' .$products->id) }}" class="btn btn-sm btn-primary">Update</a>
                   <Form action="{{ url('/admin/delete-brand/' .$products->id) }}" method="post">
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
