<?php
$con=mysqli_connect("localhost","root","","e-store") or die(mysqli_error($con));
$name=$_POST['name'];
$email =$_POST["email"];
$password=$_POST['password'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$duplicate=mysqli_query($con,"select * from signup where email='$email'");
if (mysqli_num_rows($duplicate)>0)
{
header("Location: signup.html");
echo "<script type='text/javascript'>
alert('Email-id already exists!');
</script>";
}
else{
$signup="insert into signup(name,email,password,address,contact,city) values('$name','$email','$password','$address','$contact','$city')";
$signup_result=mysqli_query($con,$signup) or die(mysqli_error($con));
echo"<script type='text/javascript'>
alert('Your sign up process is complete!');
</script>";
header('location: signup.html');
}
?>