@extends('Backend.app')


@section('backend')






<div class="col-lg-10 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Contact us Data</h4>
        <p class="card-description">
          {{-- Add class <code>.table-{color}</code> --}}
        </p>





            @if (session('delete'))
            <div class="alert alert-danger" role="alert">
                {{ session('delete') }}
            </div>
            @endif



        <div class="table-responsive pt-4">
          <table class="table table-bordered">
            <thead>
              <tr>


                  <th>
                      ID
                    </th>
                  <th>
                      Full Name
                    </th>
                    <th>
                        Email
                    </th>
                    <th>
                        Subject
                    </th>
                    <th>
                        Message
                    </th>

              </tr>
            </thead>
            <tbody>

                @forelse ($contact as $contacts)



                <tr class="table-info">

                    <td>
                        {{$contacts->contacts_id}}
                    </td>
                    <td>
                        {{$contacts->fullname}}
                    </td>
                    <td>
                        {{$contacts->email}}
                    </td>
                    <td>
                        {{$contacts->subject}}
                    </td>
                    <td>
                        {{$contacts->message}}
                    </td>


                {{-- {{dd('request')}} --}}


                @empty
                <tr>
                    <td colspan="5">No Contact us Available</td>
                </tr>


            </tr>
            @endforelse

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


@endsection
