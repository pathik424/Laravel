<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>All Users</title>
</head>

<body>

    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Username</th>
                <th scope="col">Age</th>
                <th scope="col">State</th>
                <th scope="col">View</th>
            </tr>
        </thead>
        @foreach ($data as $id => $user)
        <tbody>
                <tr>

                    <td>
                        {{ $user->id }}
                    </td>
                    <td>
                    {{ $user->name }}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <td>
                        {{ $user->username }}
                    </td>
                    <td>
                        {{ $user->age }}
                    </td>
                    <td>
                        {{ $user->state }}
                    </td>
                    <td>
                       <a href="{{route ('view.user', $user->id)}}" class="btn btn-primary btn-sm">View</a>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        < script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity = "sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin = "anonymous" >
    </script>

</body>

</html>
