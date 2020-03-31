<?php
$con=mysqli_connect("localhost","root","","e-store");
$oldpwd=$_POST['password'];
$newpwd=$_POST['password'];
$retypenewpwd=$_POST['password'];
if(strcmp($newpwd,$retypenewpwd)!=0){
	echo "<script type='text/javascript'>
alert('The passwords don't match!);
</script>";
}
else{
$change="UPDATE signup SET password='$newpwd' WHERE password='$oldpwd'";
$change_result=mysqli_query($con,$change) or die(mysqli_error($con));
echo "<script type='text/javascript'>
alert('Your password was changed successfully!');
</script>"
header("location: settings.php");
}
?>