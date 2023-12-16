<body id="signup">
  <main class="container">
    <div class="back"></div>
    <div class="brand">
      <div class="logo">
        <img height="64" src="https://i.imgur.com/E3uTxXY.png" alt="Panda Logo" />
        <h1>
          <span class="name"><span>Save</span><span>Panda</span></span>Foundation
        </h1>
      </div>
      <span class="copyright">Photo by
        <a href="https://unsplash.com/@filipz" target="_blank" title="Photographer">Filip Zrnzević</a>
        on
        <a href="https://unsplash.com/photos/QsWG0kjPQRY" target="_blank" title="Background Photo">Unsplash</a></span>
    </div>
    <div class="formWrapper">
      <div class="form">
        <h2>New member card</h2>
        <form id="form" method="post" action="#">
            @csrf
          <div class="inputWrapper">
            <input type="text" name="first" id="first" required />
            <label for="first">First Name</label>
          </div>
          <div class="inputWrapper">
            <input type="text" name="last" id="last" required />
            <label for="last">Last Name</label>
          </div>
          <div class="inputWrapper">
            <input type="email" name="email" id="email" required />
            <label for="email">Email</label>
          </div>
          <div class="inputWrapper">
            <input type="tel" name="phone" id="phone" required />
            <label for="phone">Phone Number</label>
          </div>
          <div class="inputWrapper">
            <input type="password" name="password" id="password" required />
            <label for="password">Password</label>
          </div>
          {{-- <div class="inputWrapper">
            <input type="password" name="c_password" id="c_password" required />
            <label for="c_password">Confirm Password</label>
          </div> --}}
          <input form="form" type="submit" name="register" id="register" value="REGISTER" />
          <span id="login">Already a member? <a href="login" title="Login">Log in!</a></span>
        </form>
        </div>
    </div>
  </main>
</body>



<style>

    :root {
  --font: "Lato", sans-serif;
  --max-width: 1400px;
  --radius: 12px;
  --btn-radius: 4px;
  --i-padding: 1rem;
  --o-padding: 2rem;
}

* {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0;
}

body {
  margin: 0 var(--o-padding);
  font-family: var(--font);
  color: black;
  background: -webkit-gradient(
    linear,
    left bottom,
    left top,
    from(#c5c5c5),
    to(#f5f5f5)
  );
  background: -o-linear-gradient(bottom, #c5c5c5, #f5f5f5);
  background: linear-gradient(0deg, #c5c5c5, #f5f5f5);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  min-height: 100vh;
}

.container {
  max-width: var(--max-width);
  width: 100%;
  min-height: 600px;
  height: 100%;
  margin: auto;
  overflow: hidden;
  position: relative;
  border-radius: var(--radius);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-shadow: 0 10px 1rem #0004;
  box-shadow: 0 10px 1rem #0004;
}

.back {
  position: absolute;
  left: 0;
  top: 0;
  background: url("https://i.imgur.com/EulHW7S.jpeg") center / cover no-repeat;
  height: 100%;
  width: 100%;
  z-index: -1;
}

.brand {
  width: 40%;
  padding: var(--i-padding);
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: end;
  -ms-flex-pack: end;
  justify-content: end;
  position: relative;
}

.brand .logo {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  gap: 5px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  pointer-events: none;
  position: absolute;
  left: 49%;
  top: 5rem;
  -webkit-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  transform: translateX(-50%);
}
.brand .logo h1 {
  color: #392f32;
  text-transform: uppercase;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  font-size: 34px;
  font-weight: 400;
  letter-spacing: -1px;
}
.brand .logo .name {
  padding-left: 2px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  font-size: 20px;
  letter-spacing: 12px;
  font-weight: 400;
}

.brand .copyright {
  font-size: 13px;
  font-weight: 300;
  text-align: center;
  color: #fffa;
}
.brand .copyright a {
  -webkit-transition: color 0.2s ease;
  -o-transition: color 0.2s ease;
  transition: color 0.2s ease;
  color: #fffa;
}
.brand .copyright a:hover {
  color: #fff;
}

.formWrapper {
  width: 60%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding: var(--o-padding);
  background: #fff1;
  border-left: solid 1px #0001;
  -webkit-backdrop-filter: blur(8px);
  backdrop-filter: blur(8px);
}

.formWrapper .form {
  width: 100%;
  max-width: 504px;
  margin: auto;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  gap: var(--o-padding);
}

.formWrapper .form h2 {
  text-transform: uppercase;
  text-align: center;
  font-weight: 400;
  padding-bottom: 10px;
  border-bottom: solid 1px #0001;
}

form {
  display: -ms-grid;
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
  gap: calc(var(--i-padding) + 6px);
  justify-items: center;
}

.inputWrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  position: relative;
}
.inputWrapper input {
  border: none;
  font-size: 16px;
  outline: 0;
  border-radius: var(--btn-radius);
  background: #fff2;
  border: solid 1px #0001;
  padding: var(--i-padding);
  min-width: 40%;
  cursor: text;
}

.inputWrapper label {
  cursor: text;
  padding: 4px 6px;
  color: #0006;
  position: absolute;
  left: calc(1rem - 4px);
  top: 10px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-transform-origin: left;
  -ms-transform-origin: left;
  transform-origin: left;
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  -webkit-transition: all 0.2s ease;
  -o-transition: all 0.2s ease;
  transition: all 0.2s ease;
}

.inputWrapper input:focus + label,
.inputWrapper input:valid + label {
  color: #fff;
  text-shadow: 0 1px 4px #0009;
  top: -14px;
  left: 11px;
  -webkit-transform: scale(0.8);
  -ms-transform: scale(0.8);
  transform: scale(0.8);
}

#register {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0 auto;
  min-height: initial;
  height: 47px;
  width: 100%;
  max-width: 230px;
  background: #0007;
  padding: var(--i-padding);
  color: #fff;
  border: unset;
  border-radius: var(--btn-radius);
  cursor: pointer;
  -webkit-transition: all 0.2s ease;
  -o-transition: all 0.2s ease;
  transition: all 0.2s ease;
}
#register:hover {
  background: #000;
}

#login {
  font-size: 14px;
  font-weight: 300;
  color: #fff9;
  margin: 0 auto;
  margin-top: -20px;
}
#login a {
  text-decoration: none;
  color: #fff;
}

@media (max-width: 860px) {
  .container {
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
  }
  .container .brand,
  .container .formWrapper {
    width: 100%;
  }
  .container .brand {
    min-height: 160px;
  }
  .container .brand .copyright {
    display: none;
  }
}

</style>
