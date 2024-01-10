@extends('Backend.app')


@section('admin')




<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Category Data</h4>
        <p class="card-description">
          {{-- Add class <code>.table-{color}</code> --}}
        </p>

        <div class="card-body">
            <a href="/admin/add-category" class="btn btn-primary mb-4">
                    Add Category
            </a>
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>

                <th>
                  Name
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

                @forelse ($category as $iteam )



                <tr class="table-info">
                    <td>
                        {{$iteam->name}}
                    </td>
                    <td>
                        {{$iteam->description}}
                    </td>
                    <td>
                        <img src="/{{ $iteam->image }}" height="100px" width="100px" alt="No image found"></td>

                        <td>
                            @if ($iteam->visible === 0)
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
                    <a href="{{ url('/admin/edit-category/' .$iteam->id) }}" class="btn btn-sm btn-primary">Update</a>
                   <Form action="{{ url('/admin/delete-category/' .$iteam->id) }}" method="post">
                    @csrf
                    @method('delete')
                       <button href="" class="btn btn-sm btn-danger">Delete</button>
                    </Form>
                </td>


                @empty
                <tr>
                    <td colspan="5">No Category Available</td>
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
