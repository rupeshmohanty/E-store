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

 <!-- CSS property to place div 
      side by side -->
    <style> 
      #leftbox { 
        float:left; 
        /*background:Red;*/ 
        width:25%; 
        height:280px; 
      } 
      #middlebox{ 
        float:left; 
        /*background:Green;*/ 
        width:50%; 
        height:280px; 
      } 
      #rightbox{ 
        float:right; 
        /*background:blue;*/ 
        width:25%; 
        height:280px; 
      } 
      h1{ 
        color:green; 
        text-align:center; 
      } 
    </style> 

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

    
   
  </head> 
  
  <body> 
    <div id = "boxes">  
      
      <div id = "leftbox"> 
        <h2>WHO WE ARE</h2><br>
        <img src="about.jpg" style="width: 97%;" />

        E-store Inc. is a global commerce leader that connects millions of buyers and sellers around the world. We exist to enable economic opportunity for individuals, entrepreneurs, businesses and organizations of all sizes. Our portfolio of brands includes E-store Marketplace and E-store Classifieds Group, operating in 190 markets around the world.


      </div> 
      
      <div id = "middlebox" style="margin-left: 3%;"> 
        <h2>Our History</h2> 
        <h5 style="color: blue;">1982-</h5>
        E-store launches as one of the first ecommerce platforms.
        <h5 style="color: blue;">1992-</h5>
        E-store launches as one of the first online marketplaces for books.
        <h5 style="color: blue;">1994-</h5>
        E-store launches online payment portal.
      </div> 
      
      <div id = "rightbox" style="margin-top: -21%;margin-right: 6%;"> 
        <h2>Opportunities</h2> 
        <strong>Available Roles:</strong>
        <ol type="1">
          <li>Jr/Sr Web Developer [Full time role+also available for 6 months internship]</li><br>
          <li>Business apprentice [6 months internship]</li><br>
          <li>Manager at backend operations [Full time role+also available for 6 months internship]</li>
        </ol> 
      </div> 
    </div> 
  </body> 
</html>          


<!--Footer-->
<footer class="section footer-classic context-dark bg-image" style="background: #2d3246;margin-top: 36%;">
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