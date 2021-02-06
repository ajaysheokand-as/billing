<?php 
session_start();
include("config.php");
$name 		= $_POST['name'];
$bar_code 	= $_POST['bar_code'];
$hsn_code 		= $_POST['hsn_code'];
$company_name 	= $_POST['company_name'];
$quantity	=$_POST['quantity'];
$gst		=$_POST['gst'];
$discount	=$_POST['discount'];
$opening_stock	=$_POST['opening_stock'];
$sale_price	=$_POST['sale_price'];
$mrp		=$_POST['mrp'];
$purchage_price	=$_POST['purchage_price'];


$sql="INSERT INTO newproduct (name, bar_code, hsn_code, company_name, quantity, gst, discount, opening_stock, sale_price, mrp, purchage_price) VALUES ('$name', '$bar_code', '$hsn_code', '$company_name', '$quantity', '$gst', '$discount', '$opening_stock', '$sale_price', '$mrp', '$purchage_price')";

if ($conn->query($sql)=== TRUE) {
	//echo("Data Inserted Successfully");
	$_SESSION['success_msg'] = "You Login Successfully";
// 	<div class="alert alert-secondary" role="alert">
//   This is a secondary alert—check it out!
// 	</div>
	header('location:newProduct.php');
	
}
else{
	echo "Error: " . $sql . "<br>" . $conn->error;
}

 ?>