<!DOCTYPE html>
<html lang="en">
<head>

    <title>Student Creation</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>

    <form id="my-form" method="POST" enctype="multipart/form-data" action="add-student">

        <input type="text" name="name" placeholder="Enter Your Name" required>
        <br><br>
        @csrf
        <input type="email" name="email" placeholder="Enter Your Email" required>
        <br><br>
        <input type="file" name="image" required>
        <br><br>
        <input type="submit" value="Add Student" id="btnsubmit"> {{--ahi button id etle apyu bcz be var user submit na kari sake--}}
    </form>
    <span id="output"></span>

    <Script>
        $(document).ready(function(){
            $("#my-form").submit(function(event){

                event.preventDefault();

                var form = $("#my-form")[0];
                var data = new FormData(form);

                $("#btnsubmit").prop("disabled",true);

                $.ajax({
                    type:"POST",
                    url:{{ route('AddStudent') }},
                    data:data,
                    processData:false,
                    contentType:false,

                    success:function(data){
                        // alert(data.res);
                        $("#output").text(data.res);
                        $("#btnsubmit").prop("disabled",false);

                        $("input[type=text]").val('');
                        $("input[type=email]").val('');
                        $("input[type=file]").val('');

                    },
                    error:function(e){
                        $('#output').text(e.responseText);
                        $("#btnsubmit").prop("disabled",false);


                        $("input[type=text]").val('');
                        $("input[type=email]").val('');
                        $("input[type=file]").val('');

                    }

                })

            });
        });
        </Script>

            {{--
                Commnets

                1.  $(document).ready(function(){
                    $("#my-form").submit(function(event){ // Form Submit Thay Tyare

                2.   event.preventDefault(); // anathi form Refersh Nai thay

                3.   $("#btnsubmit").prop("disabled",true); // anathi users ek j var submit kari sakse second time nai thay

                4.
                        $("input[type=text]").val('');
                        $("input[type=email]").val('');
                        $("input[type=file]").val(''); // anathi e thase data submit thaya pachi form blank thai jase je data fill karyo hase e jato rehse

                --}}
                    </body>
                    </html>

