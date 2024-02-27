<h1>Students Data</h1>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Student Data</title>

</head>
<body>

</body>
</html>


<table border="1" id="students-table"class="table table-bordered table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>

  </table>


  <script>


     $(document).ready(function() {


         $.ajax({
         type:"GET",
         url:"{{ route ('getStudents') }}",


         success:function(data){
             console.log(data);

          if(data.students.length > 0){

            //    for(let i=0; i<data.students.length;i++){

            //     let img = (data.studentds[i]['image']);
            //     $("#students-table").append(`<tr>
            //         <td>`+(i+1)+`</td>
            //         <td>`+(data.studentds[i]['name'])+`</td>
            //         <td>`+(data.studentds[i]['email'])+`</td>
            //         <td>
            //             <img src="{{ asset('storage/`+img+`') }}" alt="`+img+`" />
            //             </td>
            //         </tr>`)



            //   }
        }
            else
            {
                $("#students-table").append("<tr><td colspan="4">Data Not Found</td></tr>")
            }

         },
         error:function(err){
            console.log(err.responseText);

          }
        });

        });


  </script>


