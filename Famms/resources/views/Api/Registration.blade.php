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
         <form method="post" action="" enctype="multipart/form-data" onsubmit="adduser()">
            <fieldset>
                <br/>
                <input type="text" name="name" id="name" placeholder="name" >
                @csrf
                <br/><br/>
               <input type="text" name="username" id="username" placeholder="Username">
               <br/><br/>
               <input type="email" name="email" id="email" placeholder="E-mail">
               <br/><br/>
               <label for="submit"></label>
               <input type="submit" name="submit" id="submit"  value="REGISTER">
               {{-- <div class ="w-100">
                  <span id ="message" class="alert alert-success"></span>
               </div> --}}

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




// Java Add User Data (create)

function adduser() { // add user function ne form na submit part ma nakhvo onlick
    // alert("called")
    // event.preventDefault() // anathi page load nai thay

    // create karyu JS
    let regapi = {};
    regapi ['name'] = document.getElementById("name").value;
    regapi ['email'] = document.getElementById("email").value;
    regapi ['username'] = document.getElementById("username").value;

    // console.log(regapi);

    fetch("http://localhost:8000/api/registration",{

        method : "POST",
        headers:{
            "Content-Type": "application/json",
             },
             body: JSON.stringify({
                    name: regapi,
                    username: regapi,
                    email: regapi,
                })
            }).then((result) =>result.json()).then((result)=> {
                console.log(result.length);
                // console.log("result");
                // document.getElementById("message").innerHTML = ""

                // clear thai jase after registration field badhi j field clear ane reload empty thai jase submit pachi

                document.getElementById("name").value = "";
                document.getElementById("username").value = "";
                document.getElementById("email").value = "";

                getdata(); //Reload Table
            })
    }


//Java API Update Data (Update)

    // function updateform(regid) {
    //     fetch(`http://localhost:8000/api/updatereg/${regid}`).then((result) => result.json()).then((result) => {
    //         console.log(result);
    //         document.getElementById("name").value = result.name;
    //         document.getElementById("todo_username").value = result.username;
    //         document.getElementById("email").value = result.email;
    //     })
    // }

// java API Delete Data (Delete)

   function deleteform(delid) {
        if (confirm('are you sure??')) {
            fetch(`http://localhost:8000/api/deletereg/${delid}`).then((result) => result.json()).then((result) => {
                // console.log(result);
                getdata()
            })
        }
    }


//Java API View Data (view)

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
                            <td><button class = 'btn btn-primary' onclick="updateform(${element.id})">Edit</td>"</button>
                            <td><button class = 'btn btn-danger' onclick="deleteform(${element.id})">Delete</td>"</button>
                                </tr>
                    `

            });
            // event.preventDefault() // anathi page refresh nai thay
            // console.log(HTMLCard);
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
