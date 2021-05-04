<?php 
session_start();
include('config.php');
$sql= " SELECT * FROM newproduct ";
$result= $conn->query($sql);
// print_r($result);
// $res = $result;
// while($row = mysqli_fetch_assoc($result)){
// echo $row['name'];
// }
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Billing</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/69822a6ea8.js" crossorigin="anonymous"></script>

    <!-- Ajax  -->
     <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <style type="text/css">
      .form{
        
        margin: 10px;
      }
      
     
    </style>
      
  </head>
  <body>
    <?php
 if(isset($_SESSION['success_msg'])){
    ?>    
  <div class="alert alert-danger"><?php echo $_SESSION['success_msg'] ?></div>
<?php } ?>

<?php
include('header.php');
?>
<div class="container">
  <form action="get_price.php" method="POST">
    <div class="form">

    <h1><img src="image/invoices.png" height="40px" width="40px">Sale</h1>
    <form action="newProductdb.php" method="POST">
       <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Account Holder Name</label>
      <input type="text" class="form-control" id="name" placeholder="Name" name="name" required="required">
    </div>
    <div class="form-group col-md-6">
      <label for="date">Date</label>
      <input type="date" class="form-control"  id="date" placeholder="Bar Code" name="date">
    </div>
  </div>
  <div class="table-responsive table-hover">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Product</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
        1
        
      </th>
      <td>
      <select id="product" class="form-control" name="product" placeholder="Product">
        <option selected value='0' >Select</option>
        <?php //print_r($result);
          while($row = mysqli_fetch_assoc($result)){ ?>
        <option value=<?php echo $row['s_no']; ?> > <?php echo $row['name']; ?> </option>
        <?php } ?>
      </select>
      </td>
      <td>
        <input type="text" class="form-control" id="price" placeholder="00" name="price" disabled="">
      </td>
      <td><input type="number" class="form-control" id="quantity" placeholder="Quantity" name="quantity"></td>
      <td><input type="number" class="form-control" id="total" placeholder="--" name="total" disabled></td>
      <td><a href="">Add New</a></td>
    </tr>
    
  </tbody>
  </table>
</div>
     
  
  <div class="form-row">
    <div class="form-group col-md-6">
     <label for="gst">GST</label>
      <input type="text" class="form-control" id="gst" placeholder="18%" name="gst" disabled="">

    </div>
    <div class="form-group col-md-6">
      <label for="mrp">Payment</label>
      <select id="gender" class="form-control" name="gender" placeholder="Email">
        <option selected >Done</option>
        <option >Pending</option>
      </select>
    </div>
  </div>
   
  <button type="submit" class="btn btn-primary">Print & Save</button>
</form>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          
<script type="text/javascript" language = "javascript">

// alert('Hello Ajax');
$(document).ready(function() {
  var price = $("#price");
    var qun = $("#quantity");
$("#product").change(function(){
  qun.val(1);
  var product=$(this).val();
  console.log(product);
  if (product != 0) {
  $.ajax({
    url:'get_price.php',
     data:{product:product},
    success:function(res){
      console.log(res);
      $("#price").val(res);
      $('#total').val(res);
    }
  });
}

else
{
  alert("Choose Product");
}

})
//price
  $('#quantity').on('input',function(){
    var price = $("#price").val();
    var qun = $(this).val();
    $('#total').val(price*qun);
  });
});
</script>


    
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    
    <?php
include('footer.php');
?>
  </body>
</html>