@extends('backend.app')








@section('admin')
    <div class="card-body">
        <a href="/admin/add-post" class="btn btn-primary mb-4">
            Add Post
        </a>

        @if (session('delete'))
        <div>
            <div class="alert alert-danger" role="alert"></div>
            {{ session('delete')}}
        </div>
        @endif


        @if (session('message'))
        <div>
            <div class="alert alert-success" role="alert"></div>
            {{ session('message')}}
        </div>
        @endif



        @if (session('success'))
        <div>
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        </div>
        @endif

        <table class="table table-dark md-5">
            <thead>
                <tr>

                    <th scope="col">name</th>
                    <th scope="col">image</th>
                    <th scope="col">title</th>
                    <th scope="col">postedby</th>
                    <th scope="col">body</th>
                    <th scope="col">description</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($post as $posts)
                        <td>{{ $posts->name }}</td>
                        <td>
                            <img src="/{{ $posts->image }}" alt="no image found">
                        </td>
                        <td>{{ $posts->title }}</td>
                        <td>{{ $posts->postedby }}</td>
                        <td>{{ $posts->body }}</td>
                        <td>{{ $posts->description }}</td>
                        <td>
                            <a href="{{ url('admin/update-post/' . $posts->id) }}" class="btn btn-sm btn-primary">Update</a>
                            <form action="{{ url('admin/delete-post/' . $posts->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button href="{{ url('admin/delete-post/' . $posts->id) }}" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                        </td>

                        {{-- @empty
                        <tr>
                            <td colspan="5">No Post Available</td>
                        </tr> --}}


                </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
