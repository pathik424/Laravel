<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

</body>
</html>

@if (session('message'))
<div>
    <div class="alert alert-success" role="alert"></div>
    {{ session('message')}}
</div>
@endif

<div class="card-body">
    <a href="/add-product" class="btn btn-primary mb-4">
            Add Product
    </a>



<table class="table table-striped" style="">
    <thead>
      <tr>
        <th scope="col">Sr No</th>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>


    @foreach ($product as $tables)

    <tbody>
        <tr>
            {{-- <th scope="row">1</th> --}}
            <td>
                {{$tables->id}}
            </td>
            <td>{{$tables->name}}</td>
            <td>{{$tables->description}}</td>
            <td>{{$tables->price}}</td>
            <td>{{$tables->quantity}}</td>
            <td>
                <img src="/{{$tables->image}}" height="100px" width="100px" alt="no image found">
            </td>

        </tr>
        <td>
            <a href="{{ url('edit-product/' .$tables->id) }}" class="btn btn-sm btn-primary">Update</a>
           <Form action="{{ url('delete-product/' .$tables->id) }}" method="post">
            @csrf
            @method('delete')

               <button href="" class="btn btn-sm btn-danger">Delete</button>
            </Form>
        </td>

    </tbody>
    @endforeach
</table>

<script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </script>
