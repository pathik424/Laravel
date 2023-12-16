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
    <a href="/adduser" class="btn btn-primary mb-4">
            Add User
    </a>



<table class="table table-striped" style="">
    <thead>
      <tr>
        <th scope="col">Sr No</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
      </tr>
    </thead>


    @foreach ($table as $tables)

    <tbody>
        <tr>
            {{-- <th scope="row">1</th> --}}
            <td>{{$tables->id}}</td>
            <td>{{$tables->name}}</td>
            <td>{{$tables->email}}</td>
            <td>{{$tables->password}}</td>

        </tr>

    </tbody>
    @endforeach
</table>

<script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </script>
