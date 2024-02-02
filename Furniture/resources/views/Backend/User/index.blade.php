

@extends("Backend.app")

@section('backend')




<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">User Table</h6>


                @if (session('adduser'))
                {{-- anathi jyare login karse tyare session 1 time vakhat success or failed option batavse // a connceted authcontroller jode che --}}
                <div class="alert alert-danger" role="alert">
                    {{ session('adduser') }}
                </div>
            @endif

            @if (session('update'))
            {{-- anathi jyare login karse tyare session 1 time vakhat success or failed option batavse // a connceted authcontroller jode che --}}
            <div class="alert alert-danger" role="alert">
                {{ session('update') }}
            </div>
        @endif

        @if (session('delete'))
        {{-- anathi jyare login karse tyare session 1 time vakhat success or failed option batavse // a connceted authcontroller jode che --}}
        <div class="alert alert-danger" role="alert">
            {{ session('delete') }}
        </div>
    @endif


                <div class="card-body">
                    <a href="/admin/add-users" class="btn btn-primary mb-4">
                            Add Users
                    </a>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">User Name</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($user as $users)

                        <tr>
                            <th scope="">{{$users->id}}</th>
                            <td>{{$users->username}}</td>
                            <td>{{$users->firstname}}</td>
                            <td>{{$users->lastname}}</td>
                            <td>{{$users->email}}</td>
                            <td>
                                <a href="{{ url('/admin/edit-users/' .$users->id) }}" class="btn btn-sm btn-primary">Update</a>
                               <Form action="{{ url('/admin/delete-users/' .$users->id) }}" method="post">
                                @csrf
                                @method('delete')

                                   <button href="" class="btn btn-sm btn-danger">Delete</button>
                                </Form>
                            </td>

                        </tr>

                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>


        @endsection

