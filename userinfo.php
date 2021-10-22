<?php
$con =mysqli_connect('localhost','root' );
if ($con) {
	echo "<script>alert('connection successful')</script>";
}
else
{
	echo"No connection";
}
mysqli_select_db($con ,'portfolio');
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$msg=$_POST['message'];
$query="INSERT INTO userinfo(FirstName,LastName,Email,Mobile,Address,Message)Values('$fname','$lname','$email','$mobile','$address','$msg')";
if(mysqli_query($con,$query)){

	echo "<script>alert('<b> New Records Inserted successfully</b>')</script>";
} else {
echo " &nbsp; Not Inserted Records";
	

}
header('location:display.php');
?>