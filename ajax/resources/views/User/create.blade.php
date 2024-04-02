<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.min.css">
    <script>src="https://cdn.datatables.net/2.0.2/js/dataTables.min.js"</script>
    <script src="https://cdn.jsdelivr.net/npm/datatables@1.10.18/media/js/jquery.dataTables.min.js"></script>
      <link href="https://cdn.jsdelivr.net/npm/datatables@1.10.18/media/css/jquery.dataTables.min.css" rel="stylesheet">



    <title>Create User</title>
</head>

<body>

    {{-- Start Modal --}}

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->

    {{--ajax-modal name apyu enathi hide thase--}}
    <div class="modal fade ajax-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <form id="ajaxForm" action="" method="POST">

            <div class="modal-dialog" >
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modal-title"></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>


                    <div class="modal-body">
                        <div class="form-group mb-1">
                            <label for="">Form</label>
                            <input type="text" id="name" name="name" placeholder="Enter Your Name"class="form-control">
                            <span id="nameError" class="text-danger error-messages"></span> {{--for adding field compulsary--}}
                            <input type="text" id="email" name="email" placeholder="Enter Your Email" class="form-control">
                            <span id="emailError" class="text-danger error-messages"></span> {{--for adding field compulsary--}}
                            {{-- <input type="password" id="password" name="password" placeholder="Enter Your Password" class="form-control"> --}}
                        </div>


                        <div class="form-group mb-1">
                            <label for="">Location</label>
                            <select id="type" name="type" class="form-control">
                                <option disabled selected>Choose Option</option>
                                <option value="New Vadaj">New Vadaj</option>
                                <option value="Juna Vadaj">Juna Vadaj</option>
                            </select>
                            <span id="typeError" class="text-danger error-messages"></span> {{--for adding field compulsary--}}
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="saveBtn"></button>
                    </div>
                </div>
            </div>
        </form>

    </div>

    {{-- End Modal --}}

    <div class="row">
        <div class="col-md-6 offset-3" style="margin-top: 100px">
            <a href="" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Add User</a>


            <table id="user-table" class="table table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Type</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
            </tr>

        </tbody>
    </table>
</div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $(function () {

    var table = $('.user-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('user.list') }}",
        columns: [
            // {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'type', name: 'type'},

            {
                data: 'action',
                name: 'action',
                orderable: true,
                searchable: true
            },
        ]
    });

  });




            //    alert('here') // First Check Network Console run or Not
            $('#modal-title').html('Create User');
            $('#saveBtn').html('Save User');

            var form = $('#ajaxForm')[0];
            $('#saveBtn').click(function() {


                // After Submiting Save Button Blank Box thai jay ena mate
                  $('.error-messages').html('');
                  // After Submiting Save Button Blank Box thai jay ena mate



                // console.log('clicked')

                // var name = $('#name').val();
                // var email = $('#email').val();
                // var type = $('#type').val();

                // console.log(type)

                var formData = new FormData(form);
                // console.log(form)

                // Ajax Calling

                $.ajax({

                    url: '{{ route('user.store') }}',
                    method: 'post',
                    processData: false,
                    contentType: false,
                    data: formData,

                    success: function(response) {
                        // console.log(res)
                        // console.log(response.success) // check to user controller return jason success message
                        $('.ajax-modal').modal('hide'); // after submiting data modal close thai jase

                        if(response)
                         swal("success", response.success, "success"); // sweat alert in serch google  mathi upadyu

                    },
                    error: function(error) {

                        if(error){
                            // for Name Field is required
                            console.log(error.responseJSON.errors.name)
                            $('#nameError').html(error.responseJSON.errors.name);
                            $('#emailError').html(error.responseJSON.errors.email);
                            $('#typeError').html(error.responseJSON.errors.type);
                        }
                        // console.log(error)
                    }

                });


            })

        });
    </script>

</body>

</html>
