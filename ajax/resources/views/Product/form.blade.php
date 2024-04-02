<!DOCTYPE html>
<html lang="en">
<head>

    <title>Product Creation</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>

    <form action="" method="POST" enctype="multipart/form-data" id="my-form">

        <input type="text" name="name" placeholder="Enter Your Name" required>
        @csrf
        <br><br>
        <input type="email" name="email" placeholder="Enter Your Email" required>
        <br><br>
        <input type="file" name="image" required>
        <br><br>
        <input type="submit" value="Add Product" id="btnSubmit">


    </form>

    <span id="output"></span>

    <script>

        $(document).ready(function(){

            $("#my-form").submit(function(event){
                //   event.preventDefault();

                  // Form no Data Khali Avse
                  var form = $("#my-form")[0];
                  var data = new FormData(form);

                  $("btnSubmit").prop("disabled",true);

                  $.ajax({

                    type:"POST",
                    url:"{{ route('addProduct')}}"
                    data:data,
                    processData:false,
                    contentType:false,

                    success:function(data){

                        // alert(data.res)
                        $("#output").text(data.res);
                        $("btnSubmit").prop("disabled",false);
                        $("input[type='text']").val('');
                        $("input[type='email']").val('');
                        $("input[type='text']").val('');

                    }
                    error:function(e){

                        $("#output").text(e.responseText);
                        console.log(e.responseText)
                        $("btnSubmit").prop("disabled",false);
                        $("input[type='text']").val('');
                        $("input[type='email']").val('');
                        $("input[type='text']").val('');


                    }

                  });
            });
        });



    </script>


</body>
</html>
