<?php
include('config.php');
// $sno = $_POST['sno'];
 $product_id = $_REQUEST['product'];
$sql = "SELECT sale_price FROM newproduct where s_no = $product_id";
$result= $conn->query($sql);
while($row = mysqli_fetch_assoc($result)){
echo $row['sale_price'];
}
?>