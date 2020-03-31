<?php
$con=mysqli_connect("localhost","root","","e-store") or die(mysqli_error($con));
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$contact_us="insert into contact_us(name,email,subject,message) values('$name','$email','$subject','$message')";
$contact_us_submit=mysqli_query($con,$contact_us) or die(mysqli_error($con));
echo "<h2>Your message has been sent!</h2>";
?>
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
        <a class="nav-link" href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a>
      </li><hr>
      <li class="nav-item active">
        <a href="" class="nav-link" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm"><span class="glyphicon glyphicon-log-out"></span>Login</a>
      </li><hr>
      <li class="nav-item active">
        <a class="nav-link" href="about.php"><span class="glyphicon glyphicon-tasks"></span>About Us</a>
      </li><hr>
      <li class="nav-item active">
        <a class="nav-link" href="contact.php"><span class="glyphicon glyphicon-phone"></span>Contact Us</a>
      </li><hr>
      <!--<li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>-->
    </ul>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
  </div>
</nav>

<div>
  <h2>LIVE SUPPORT</h2>
  <h5><b>24 hours | 7 days a week | 365 days a year Live Technical Support</b></h5>
  <p style="width: 70%;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,by injected humour,or randomised words which don't look even slightly believable.If you are going to use a passage of Lorem Ipsum,you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
</div>

<div>
  <img src="customer_care.png" style="width: 28%;margin-top: -12%;margin-left: 69%;" />
</div>

<section style="margin-top: 7%;">
<div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="contact_us.php" method="POST" style="width: 90%;">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                          <label for="name" class="name">Name</label>
                          <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                          <label for="email" class="email">Email</label>
                          <input type="text" id="email" name="email" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                          <label for="subject" class="subject">Subject</label>
                          <input type="text" id="subject" name="subject" class="form-control">
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                          <label for="message" class="message">Message</label>
                          <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            
                        </div>

                    </div>
                </div><br>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0" style="margin-right: 46%;">
              <h2>Company Information:</h2>
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Bhubaneswar,Odisha,India</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+91-123-0000000</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>rupeshmohanty67@gmail.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section><br>
<!--Footer-->
<footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
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
<!--Login form-->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">LOGIN</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="login.php" method="POST">
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <p>Don't have a account?<a href="signup.html">Register</a></p>
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="defaultForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="defaultForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default">Login</button>
      </div>
    </div>
  </div>
</div>
</form>
      
    </body>
    </html>