<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
</head>
<body>
  <section>
    <form action="" method="POST">
        @csrf
        <h1>Login</h1>
        <div class="login-form">
            <h4>Username</h4>
      <div class="username-input">
        <i class="fas fa-user"></i>
        <input type="text" name="email" placeholder="Type your username">
    </div>
    <h4>Password</h4>
    <div class="password-input">
        <i class="fas fa-lock"></i>
        <input type="text" name="password" placeholder="Type your password">
    </div>
    <p>Forgot password?</p>
    </div>
    <button class="login-btn">
        LOGIN
    </button>
    <div class="alternative-signup">
        <p>Not a member? <span>Sign-up</span></p>
    </div>
</section>
</form>
</body>
</html>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Roboto+Condensed:wght@700&family=Roboto:wght@300;400;500;600;700&display=swap');


* {
  font-family: 'Roboto', sans-serif;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-size: 12px;
}

body {
  background-color: #fff9f9;
  min-height: 700px;
  minwidth: 700px;
  height: 100vh;
  width: 100vw;
  background-color:hsla(0,100%,88%,1);
  background-image:
radial-gradient(at 80% 0%, hsla(189,100%,56%,1) 0px, transparent 50%),
radial-gradient(at 0% 50%, hsla(355,100%,93%,1) 0px, transparent 50%),
radial-gradient(at 80% 50%, hsla(340,100%,76%,1) 0px, transparent 50%),
radial-gradient(at 0% 100%, hsla(269,100%,77%,1) 0px, transparent 50%),
radial-gradient(at 0% 0%, hsla(343,100%,76%,1) 0px, transparent 50%);
}

section {
  margin: 0 auto;
  width: 400px;
  mheight: 380px;
  transform: translateY(40%);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-evenly;
  background-color: rgba(255,255,255,0.4);
  border-radius: 20px;
  box-shadow: 0px 0 31px 0px rgb(0 0 0 / 10%);
}

h1 {
  margin: 20px 0 10px 0;
  font-size: 3rem;
  font-weight: 400;
  font-family: 'Poppins', sans-serif;
}

.login-form {
  width: 70%;
  margin-bottom: 15px;
}

h4 {
  margin: 20px 0 5px 0;
  font-size: 1.5rem;
  font-weight: 300;
}
input {
  width: 80%;
  font-size:1.1rem;
  font-weight: 300;
  padding: 7px 0;
  border: none;
  background-color: inherit;
}

.username-input, .password-input {
  width: 90%;
  border-bottom: 1px solid #a4a4a4;
}

i {
  width: 10%;
  color: rgba(0,0,0,0.3);
  padding-right: 7px;
}

.login-form>p {
  width: 90%;
  font-size: 1.1rem;
  text-align: right;
  margin-top: 5px;
  font-weight: 300;
}

.login-btn {
  border: none;
  padding: 7px 20px;
  width: 50%;
  border-radius: 10px;
  font-size: 1.2rem;
  background-image: linear-gradient(43deg, hsla(340,100%,76%,1) 0%, hsla(269,100%,77%,1) 100%);
  color: white;
  font-weight: 600;
}

.alternative-signup {
  width: 70%;
  margin: 20px 0;
  display: flex;
  flex-direction: column;
  align-items: center;
}
.alternative-signup>p {
  width: 90%;
  font-size: 1.1rem;
  text-align: center;
  margin-bottom: 5px;
  font-weight: 300;
}
span {
  font-size: 1.1rem;
  font-weight: 600;
  color: hsl(269deg 26% 47%);
}
</style>
