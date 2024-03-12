@extends('Backend.app')


@section('backend')
    <div class="col-lg-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">My Users</h4>
                <a type="button" href="/admin/adduser" class="btn btn-primary btn-sm">Add User</a>
                <p class="card-description">
                    {{-- Add class <code>.table-bordered</code> --}}
                </p>


                @if (session('users'))
                    <div class="alert alert-success" role="alert">
                        {{ session('users') }}
                    </div>
                @endif

                @if (session('updateusers'))
                    <div class="alert alert-success" role="alert">
                        {{ session('updateusers') }}
                    </div>
                @endif

                @if (session('deleteusers'))
                    <div class="alert alert-danger" role="danger">
                        {{ session('deleteusers') }}
                    </div>
                @endif

                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    name
                                </th>
                                {{-- <th>
                                    Username
                                </th> --}}
                                <th>
                                    Email
                                </th>
                                {{-- <th>
                                    City
                                </th>
                                <th>
                                    Age
                                </th> --}}
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>
                                        {{ $user->id }}
                                    </td>
                                    <td>
                                        {{ $user->name }}
                                    </td>
                                    {{-- <td>
                                        {{ $user->username }}
                                    </td> --}}
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                    {{-- <td>
                                        {{ $user->city }}
                                    </td>
                                    <td>
                                        {{ $user->age }}
                                    </td> --}}
                                    <td>
                                        <a href="{{ url('admin/updateuser/' . $user->id) }}"
                                            class="btn btn-sm btn-primary">Update</a>
                                        <form action="{{ url('admin/deleteuser/' . $user->id) }}" method="POST">
                                            @method('delete')
                                            @csrf

                                            <button href="" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
