<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM signup WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
         echo "<script type='text/javascript'>
            alert('You have successfully logged into your account!');
         </script>";
         
         header("location: home.php");
      }else {
         echo "<script type='text/javascript'>
            alert('Invalid email or password!');
         </script>";
      }
   }
?>

