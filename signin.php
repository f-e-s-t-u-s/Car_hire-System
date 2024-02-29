

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="logincode.css" />
  </head>
  <body>
    <section class="container">
      <div class="image-section">
        <div class="image-wrapper">
          <img src="./mesh-gradient.png" alt="" />
        </div>

        <div class="content-container">
          <h1 class="section-heading">
            Welcome to Your Road of Endless Adventures with
            <span>Captain Morgan</span>
          </h1>
          <p class="section-paragraph">
            Embark on the journey of a thousand smiles. Your adventure begins
            with us – where every mile is a story and every destination is an
            opportunity. Welcome to seamless travels, where the road is your
            canvas and the memories are your masterpiece. Start your remarkable
            journey with <span>Captain Morgan Car Hire</span>
          </p>
        </div>
      </div>

      <div class="form-section">
        <div class="form-wrapper">
          <div class="logo-container">
            <a href="#" class="logo-container">
              <img src="./logo.png" alt="Logo" />
            </a>
          </div>

          <h2>Welcome Back! 👋🏻</h2>
          <p>Enter your credentials to access your account.</p>
          <form action="SignUpfm.php" method="post">
            <div class="input-container">
              <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" autocomplete="on" />
              </div>
              <div class="form-group">
                <label for="secName">Second Name</label>
                <input type="text" id="secName" name="secName" autocomplete="on" />
              </div>
              <div class="form-group">
                <label for="phoneNumb">Phone Number</label>
                <input type="tel" id="phoneNumb" name="phoneNumb" autocomplete="on" />
              </div>
              <div class="form-group">
                <label for="IdNumb">Id Number</label>
                <input type="text" id="IdNumb" name="IdNumb" autocomplete="on" />
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" autocomplete="on" />
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" />
              </div>
            </div>
            <div class="remember-forgot">
              <a href="login.php">Already have an Account?</a>
            </div>

            <button type="submit" class="login-btn">Log In</button>

            <div class="or-divider">or</div>

            <button type="submit" class="google-signin">
              <object data="./google.svg"></object>
              <span>Sign in with Google</span>
            </button>
          </form>
        </div>
      </div>
    </section>
  
  </body>
</html>
