<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="logincode.css">
  </head>
  <body>
    <section class="container">

      <div class="image-section">
        <div class="image-wrapper">
          <img src="./mesh-gradient.png" alt="">
        </div>

        <div class="content-container">
          <h1 class="section-heading">Welcome to Your Road of Endless Adventures with  <span>Captain Morgan</span></h1>
          <p class="section-paragraph">Embark on the journey of a thousand smiles. Your adventure begins with us
             – where every mile is a story and every destination is an opportunity. Welcome to seamless travels,
              where the road is your canvas and the memories are your masterpiece. Start your remarkable journey 
              with <span>Captain Morgan Car Hire</span> </p>
        </div>
      </div>

      <div class="form-section">
        <div class="form-wrapper">
          <div class="logo-container">
            <a href="#" class="logo-container">
              <img src="./logo.png" alt="Logo">
            </a>
          </div>

          <h2>Welcome Back! 👋🏻</h2>
          <p>Enter your credentials to access your account.</p>
          <form action="LogInfm.php" method="post">
            <div class="input-container">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" autocomplete="on">
              </div>
              <div  class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" autocomplete="on">
              </div>
            </div>
            <div class="remember-forgot">
              <div class="remember-me">
                <input type="checkbox" value="remember-me" id="remember-me">
                <label for="remember-me">Remember me</label>
              </div>
  
              <a href="forgotpas.php">Forgot password?</a>
            </div>
  
            <button type="submit" class="login-btn">Log In</button>
  
            <a href="signin.php"><button  type="button" class="login-btn">Sign In</button></a>
            
  
            <div class="or-divider">or</div>
  
            <button type="button" class="google-signin">
              <object data="./google.svg"></object>
              <span>Sign in with Google</span>
            </button>
          </form>
         

          
        </div>
      </div>
    </section>
  </body>
</html>