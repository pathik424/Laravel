
<?php

// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";

?>




<body>
      <div id="container">
         <header>Login Now</header>
         <form method="post" action="">
            <fieldset>
               <br/>
             
               <input type="text" name="username" id="username" placeholder="User Name/Email ID" required autofocus>
               <br/><br/>
        
               <input type="password" name="password" id="password" placeholder="Password" required>
               <br/> <br/> <br/>
               <label for="submit"></label>
               <input type="submit" name="login" id="submit" value="LOGIN">
              
               <br> <br> <br>
               
                <a style = color:white;>Don't have an account?</a>
               <br> <br> <br>
               <div class="Sign up" >
               <a href="register" target="_blank" style = color:white; >Sign up</a>
                </div>
            </fieldset>
         </form>
      </div>
   </body>


   <style>
html {
    height: 100%;
    width: 100%;
}

body {
    background: url("https://images.unsplash.com/photo-1527526029430-319f10814151?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80") no-repeat center center fixed;
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