<?php 
include("config.php");
$name 		= $_POST['name'];
$mobile_no 	= $_POST['mobile_no'];
$gst_no		=$_POST['gst_no'];
$old_balance=$_POST['old_balance'];
$email		=$_POST['email'];
$gender		=$_POST['gender'];
$password	=$_POST['password'];
$address	=$_POST['address'];
$city		=$_POST['city'];
$state		=$_POST['state'];
$pin_code	=$_POST['pin_code'];

$sql="INSERT INTO createaccount (name, mobile_no, gst_no, old_balance, email, gender, password, address, city, state, pin_code) VALUES ('$name', '$mobile_no', '$gst_no', '$old_balance', '$email', '$gender', '$password', '$address', '$city', '$state', '$pin_code')";

if ($conn->query($sql)=== TRUE) {
	//echo("Data Inserted Successfully");
	$_SESSION['success_msg'] = "You Login Successfully";
	header('location:createAcc.php');
}
else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}

 ?>