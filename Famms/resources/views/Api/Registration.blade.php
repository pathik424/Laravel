<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>APi Registration</title>
</head>
<body>

</body>
</html>




<body>
      <div id="">
         <header>Register new account</header>
         <form method="post" action="" enctype="multipart/form-data" >
            <fieldset>
                <br/>
                <input type="text" name="name" id="name" placeholder="name" required>
                @csrf
                <br/><br/>
               <input type="text" name="username" id="username" placeholder="Username" required autofocus>
               <br/><br/>
               <input type="email" name="email" id="email" placeholder="E-mail" required>
               <br/><br/>
               <label for="submit"></label>
               <input type="submit" name="submit" id="submit" value="REGISTER">
            </fieldset>
         </form>
      </div>


      <div id="">
        <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Username</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody id="DispData">

            </tbody >
          </table>
     </div>

   </body>

<Script>

    // // function getdata() {

    // //     fetch("http://localhost:8000/api/regapi").then((res)=>res.json()).then(res)=>{

    //         function getdata() {
    //     fetch("http://localhost:8000/api/regapi").then((result) => result.json()).then((result) => {
    //         var tmpdata = "";
    //         //    console.log(result); // fetch line ma je lakhyu je enathi consol ma badho data mali jase
    //         .result.forEach((User)=>{
    //             tmpData+= "<tr>"
    //             tmpData+= "<td>"+User.name+"</td>";
    //             tmpData+= "<td>"+User.email+"</td>";
    //             tmpData+= "<td>"+User.username+"</td>";
    //             tmpData+= "<td><button class = 'btn btn-primary'>Edit</td>";
    //             tmpData+= "<td><button class = 'btn btn-danger'>Delete</td>";
    //             tmpData+= "</tr>"

    //         })
    //         document.getElementById("tabledata").innerHTML = tmpdata;
    //     });

    // }



    function getdata() {
        fetch("http://localhost:8000/api/regapi").then((result) =>result.json()).then((result)=> {
            // console.log(result);
            HTMLCard = "";
            result.forEach(element => {
                HTMLCard += `
                <tr>
                    <td>${element.id}</td>
                    <td>${element.name}</td>
                            <td>${element.email}</td>
                            <td>${element.username}</td>
                            <td><button class = 'btn btn-primary'>Edit</td>"
                            <td><button class = 'btn btn-danger'>Delete</td>"
                                </tr>
                    `

            });
            // event.preventDefault() // anathi page refresh nai thay
            console.log(HTMLCard);
            document.getElementById("DispData").innerHTML = HTMLCard
        })
    }
    getdata() // call karavanu compulsary thase upar je function banavyu e j



</Script>






   <style>

html {
    height: 100%;
    width: 100%;
}

body {
    background: url("https://images.unsplash.com/photo-1485802007047-7774de7208e5?dpr=1&auto=compress,format&fit=crop&w=1800&h") no-repeat center center fixed;
    background-size: cover;
    font-family: 'Droid Serif', serif;
}

#container {
    background: rgba(3, 3, 55, 0.5);
    width: 18.75rem;
    height: 25rem;
    margin: auto;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
}

header {
    text-align: center;
    vertical-align: middle;
    line-height: 3rem;
    height: 3rem;
    background: rgba(3, 3, 55, 0.7);
    font-size: 1.4rem;
    color: #d3d3d3;
}

fieldset {
    border: 0;
    text-align: center;
}

input[type="submit"] {
    background: rgba(235, 30, 54, 1);
    border: 0;
    display: block;
    width: 70%;
    margin: 0 auto;
    color: white;
    padding: 0.7rem;
    cursor: pointer;
}

input {
    background: transparent;
    border: 0;
    border-left: 4px solid;
    border-color: #FF0000;
    padding: 10px;
    color: white;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus {
    outline: 0;
    background: rgba(235, 30, 54, 0.3);
    border-radius: 1.2rem;
    border-color: transparent;
}

::placeholder {
    color: #d3d3d3;
}

/*Media queries */

@media all and (min-width: 481px) and (max-width: 568px) {
    #container {
        margin-top: 10%;
        margin-bottom: 10%;
    }
}
    @media all and (min-width: 569px) and (max-width: 768px) {
        #container {
            margin-top: 5%;
            margin-bottom: 5%;
        }
    }

   </style>
