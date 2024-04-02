<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<H1>Product List</H1>

<span id="output">

</span>

<table border="1" id ="product-table">
    <tr>
        <th>S. No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
</table>


<script>

      $(document).ready(function(){

         $.ajax({
            type:"GET",
            url:"{{route('getProducts')}}",
            success:function(data){

                // console.log(data);
                if(data.products.length > 0){
                    //For loop Lagayu

                    for(let i=0;i<data.products.length;i++){

                        let img = data.products[i]['image'];

                        $("#product-table").append(`<tr>
                            <td>`+(i+1)+`</td>
                            <td>`+(data.products[i]['name'])+`</td>
                            <td>`+(data.products[i]['email'])+`</td>
                            <td>
                                 <img src="{{ asset('storage/`+img+`') }}" alt="`+img+`" width="100px" height="100px"/>
                            </td>
                            <td>
                                <a href ="editproduct/`+(data.products[i]['id'])+`" "class="btn btn-primary">Edit</a>
                                <a href ="#" "class="deletedata" data-id= "`+(data.products[i]['id'])+`">Delete</a>
                                </td>


                            </tr>`);

                    }

                }
                else{
                    $("#product-table").append("<tr><td colspan='4'>Data Not Found</tr></td>")
                }
            },
            error:function(err){
                console.log(err.responseText);
         }

      });

      $("#product-table").on("click",".deletedata",function(){

        var id =$(this).attr("data-id");
        var obj = $(this);

        $.ajax({
            type:"GET",
            url:"delete-data/"+id,
            success:function(data){

                $(obj).parent().parent().remove();
                $("#output").text(data.result);

            },
            error:function(err){
              consol.log(err.responseText);
            }

        });




      });
      });



</script>
