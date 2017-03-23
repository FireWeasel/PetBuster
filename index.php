<!DOCTYPE html>
<html>
  <head>
    <title>PetBuster</title>
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  	<link rel="stylesheet" type="text/css" href="css/index.css">
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700|Lato:400,500' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700|Lato:400,500' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <div class="slider" id="main-slider">
        <div class="slider-wrapper">
          <img src="images/landing-page-background.jpg" alt="First" class="slide" />
          <img src="images/landing-page-background2.jpg" alt="Second" class="slide" />
          <img src="images/landing-page-background3.jpg" alt="Third" class="slide" />
        </div>
      </div>
      <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="loginmodal-container">
            <h1>Login</h1><br>
            <img src="images/paw-transparent.png" id="login-image">
            <form action="engine/sign_in.php" method="post">
              <input type="text" name="user" placeholder="Username">
              <input type="password" name="pass" placeholder="Password">
              <input type="submit" name="login" class="login loginmodal-submit" value="Login">
            </form>

            <div class="login-help">
              <a href="#">Register</a> - <a href="#">Forgot Password</a>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="loginmodal-container">
            <h1>Sign Up</h1><br>
            <img src="images/paw-transparent.png" id="login-image">
            <form action="engine/sign_up.php" method="post">
              <input type="text" name="signup-user" placeholder="Username">
              <input type="text" name="signup-email" placeholder="Email">
              <input type="password" name="signup-pass" placeholder="Password">
              <input type="password" name="signup-pass-confirm" placeholder="Confirm Password">
              <input type="submit" name="login" class="login loginmodal-submit" value="Sign Up">
            </form>

            <div class="login-help">
              <a href="#">Login</a>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="about-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="loginmodal-container">
            <h1>Pet Buster</h1><br>
            <p>Pet Buster is a web application for creating posts for lost and found pets.</p>
          </div>
        </div>
      </div>
  	<div class="container">
      <div class="widget center">
        <div class="text center">
          <h1>PetBuster</h1>
          <p>The place where you can find your lost pet.</p>
          <button class="btn btn-transparent col-md-3" id="navbtn" data-toggle="modal" data-target="#about-modal">About</button>
          <button class="btn btn-transparent col-md-3" id="navbtn" data-toggle="modal" data-target="#signup-modal">Sign Up</button>
          <button class="btn btn-transparent col-md-3" id="navbtn" data-toggle="modal" data-target="#login-modal">Sign In</button>
        </div>
        <div class="blur">
          <img src="images/landing-page-background.jpg" class="bg">
        </div>
      </div>

      <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
        <filter id="blur">
          <feGaussianBlur stdDeviation="10" />
        </filter>
      </svg>
    </div>
    <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
    <script type="text/javascript" src="js/lodash-3.10.1.js"></script>
  	<script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
  </body>
</html>
