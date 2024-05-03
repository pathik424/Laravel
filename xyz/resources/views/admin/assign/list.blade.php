@extends('layout.app')


@section('admin')
    {{-- Filter Strat --}}

    <div class="card-body" style="margin-left: 260px">
        <div class="row">

            <div class="form-group col-md-3">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" value ="{{ Request::get('name') }}"
                    name="name" placeholder="Enter Name">
            </div>
            <div class="form-group col-md-3">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" value ="{{ Request::get('email') }}"
                    name="email" placeholder="Enter Email">
            </div>

            <div class="card-footer col-md-3" style="margin-top: 20px">
                <button type="submit" class="btn btn-primary">search</button>
                <a href="{{ url('admin/list') }}" class="btn btn-success">clear</a>
            </div>
        </div>
    </div>

    {{-- Filter End --}}

    <div class="card"style="margin-left: 260px">
        <div class="card-header">
            <h3 class="card-title">Subject List</h3>

            <div class="col-sm-12" style="text-align:right;">
                <a href="{{ url('admin/assign/add') }}" class="btn btn-primary">Add new assign Subject</a>
            </div>
        </div>
        {{-- {{dd('inside if')}} --}}

        @if (session('adminadd'))
            <div class="alert alert-success" role="alert">
                {{ session('adminadd') }}
            </div>
        @endif

        @if (session('adminupdate'))
            <div class="alert alert-success" role="alert">
                {{ session('adminupdate') }}
            </div>
        @endif

        @if (session('admindelete'))
            <div class="alert alert-danger" role="alert">
                {{ session('admindelete') }}
            </div>
        @endif
        <!-- /.card-header -->
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Class Name</th>
                        <th>Subject Name </th>
                        <th>Created By</th>
                        <th>Status</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($data as $value)
                        <tr>
                            {{-- {{dd($request)}}; --}}
                            {{-- {{dd($value)}} --}}
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->class_name }}</td>
                            <td>{{ $value->subject_name }}</td>
                            <td>{{ $value->created_by_name }}</td>

                            <td>
                                @if ($value->status == 0)
                                    Inactive
                                @else
                                    Active
                                @endif
                            </td>
                            <td>{{ $value->created_at }}</td>
                            <td>
                                <a href="{{ url('admin/assign/edit/' .$value->id ) }}" class="btn btn-primary">Edit</a>
                                <Form action="{{ url('/admin/assign/delete/' .$value->id ) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button href="" class="btn btn-danger">Delete</button>
                                </Form>
                            </td>

                            @empty
                            <tr>
                                <td colspan="5">Not any subject created </td>
                            </tr>
                        </tr>
                    @endforelse

                </tbody>
            </table>
            {{-- {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!} --}}
        </div>
        {{-- {{ $getRecord->appends(request()->query())->links() }} --}}
        <!-- /.card-body -->
    </div>
@endsection
