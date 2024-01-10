<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>






<form method="post" action="" enctype="multipart/form-data">
    @csrf
    @method('put')

    <div class="form-group">
        <label for="exampleInputPassword1">Name</label>
        <input type="name" name="name" class="form-control" id="exampleInputPassword1" placeholder="name" value="{{$edit->name}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">description</label>
        <input type="description" name="description" class="form-control" id="exampleInputPassword1" placeholder="description" value="{{$edit->description}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">price</label>
        <input type="price" name="price" class="form-control" id="exampleInputPassword1" placeholder="price" value="{{$edit->price}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">quantity</label>
        <input type="quantity" name="quantity" class="form-control" id="exampleInputPassword1" placeholder="quantity" value="{{$edit->quantity}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Image</label>
        <input type="file" name="image" class="form-control"  id="exampleInputPassword1" placeholder="Upload Your Image" value="{{$edit->image}}">
        <img src="/{{$edit->image}}" alt="" height="100px" width="100px">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>



  <script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </script>
