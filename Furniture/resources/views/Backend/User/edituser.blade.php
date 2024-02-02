

@extends("Backend.app")

@section('backend')

<div class="col-sm-12 col-xl-6">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Update Users</h6>
        <form action="" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="username" class="form-control" name="username" value="{{ $edituser->username }}" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">First Name</label>
                <input type="firstname" class="form-control" name="firstname" value="{{ $edituser->firstname }}" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Last Name</label>
                <input type="lastname" class="form-control" name="lastname" value="{{ $edituser->lastname }}" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" value="{{ $edituser->email }}" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value="{{ $edituser->password }}"  id="exampleInputPassword1">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
</div>

@endsection
