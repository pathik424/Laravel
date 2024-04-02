<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<img src="{{ asset('storage/') }}/{{ $product[0]->image }}" alt="" width="100">

<form action="" id="update-form">


    <input type="text" name="name" value="{{ $product[0]->name }}" placeholder="Enter Your Name" required>
    @csrf
    <br><br>
    <input type="email" name="email" value="{{ $product[0]->email }}" placeholder="Enter Your Email" required>
    <br><br>
    <input type="file" name="image" >
    <input type="hidden" name="id" value="{{ $product[0]->id }}">
    <br><br>
    <input type="submit" value="Update Product" id="">
</form>

<span id="output">

</span>


<script>


          $(document).ready(function(){

            $('#update-form').submit(function(event){

                event.preventDefault();

                var form = $('#update-form')[0];
                var data = new FormData(form);


               $.ajax({
                type:"POST",
                url:"{{ route('updateproduct') }}",
                data:data,
                processData:false,
                contentType:false,
                success:function(data){

                    $("#output").text(data.result);
                    window.open("get-product","_self");

                },
                error:function(err){

                    $("#output").text(err.responseText);
                }
               })

            });
          });

</script>


