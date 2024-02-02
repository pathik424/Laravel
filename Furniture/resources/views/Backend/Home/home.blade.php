@extends("Backend.app")

@section('backend')


<h3>Welcome</h3>

<div class="px-4">
    <div class="font-medium text-base text-gray-800"> Welcome {{ Auth::user()->firstname }}
    </div>
    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
</div>


<div>

</div>
    @endsection

