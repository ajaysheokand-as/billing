<?php 

include('config.php');

$email 		= $_POST['email'];
$password 	=$_POST['password'];

$sql= "SELECT * FROM createaccount where email ='$email' and password='$password' ";
$result = $conn-> query($sql);

if($result-> num_rows > 0){
	echo "Login Successfully";
	$_SESSION['success_msg'] = "You Login Successfully";
	header('location:index.php');
	exit();
}
else{
	echo "Error";
	$_SESSION['success_msg'] = "You Login Successfully";
	header('location:log_in.php');
	exit();
}


?>