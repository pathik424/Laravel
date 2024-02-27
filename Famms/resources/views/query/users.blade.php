<h1>
    User Detail
</h1>

@foreach ($data as $id => $user )

<h3>Name : {{$user->name}}</h3>
<h3>Email : {{$user->email}}</h3>
<h3>Username : {{$user->username}}</h3>
<h3>age : {{$user->age}}</h3>
<h3>state : {{$user->state}}</h3>

@endforeach
