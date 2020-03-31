<!DOCTYPE html>
<html>
<head>
  <title>E-store</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="main.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">E-store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" style="float: right;">
      <li class="nav-item active">
        <a class="nav-link" href="settings.php"><span class="glyphicon glyphicon-user"></span>Settings</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><span class="glyphicon glyphicon-log-out">Logout</a>
      </li>
      
      <!--<li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>-->
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
  </div>
</nav><br>

<section>
  <p style="margin-left: 31%;">Thank you for ordering from E-store.The order shall be delivered to you shortly.</p>
  <hr>
  <style>
    hr{
      display: block; 
      margin-before: 0.5em; 
      margin-after: 0.5em; 
      margin-start: auto; 
      margin-end: auto; 
      overflow: hidden; 
      border-style: 
      inset; border-width: 1px;
      width: 52%;
    }
  </style>
<p style="margin-left: 39%;">Order some more electronics items <a href="home.php">here</a></p>
</section>
<!--Footer-->
<footer class="section footer-classic context-dark bg-image" style="background: #2d3246;margin-top: 30%;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
                <h2 style="margin-top: 0%;">Information</h2>
                <a href="aboutus.php">About Us</a><br>
                <a href="contactus.php">Contact Us</a>
              </div>
            </div>
            <div class="col-md-4">
              <h2>My Account</h2>
              <a href="login.php">Login</a><br>
              <a href="signup.php">Sign Up</a>
            </div>
            <div class="col-md-4 col-xl-3">
              <h2>Contact Us</h2>
              <p>Contact:+91-123-0000000</p>
            </div>
          </div>
        </div>
      </footer>
