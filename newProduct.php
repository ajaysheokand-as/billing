<?php 
session_start();
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Add New Product</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/69822a6ea8.js" crossorigin="anonymous"></script>

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
  <div class="alert alert-success"><?php echo $_SESSION['success_msg'] ?></div>
<?php 
unset($_SESSION['success_msg']);
} ?>

<?php
include('header.php');
?>
<div class="container">
  <form action="newProductdb.php" method="POST">
    <div class="form">

    <h1> Sale</h1>
    <form action="newProductdb.php" method="POST">
       <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Name" name="name" required="required">
    </div>
    <div class="form-group col-md-6">
      <label for="bar_code">Your Mail Id</label>
      <input type="text" class="form-control" id="bar_code" placeholder="mailid@gmail.com" name="bar_code"disabled="">
    </div>
  </div>
      <div class="form-row">
    <div class="form-group col-md-6">
      <label for="hsn_code">HSN Code</label>
      <input type="text" class="form-control" id="hsn_code" placeholder="HSN Code" name="hsn_code">
    </div>
    <div class="form-group col-md-6">
      <label for="company_name">Company Name</label>
      <input type="text" class="form-control" id="company_name" placeholder="Company Name" name="company_name">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="quantity">Quantity</label>
      <input type="text" class="form-control" id="quantity" placeholder="Quantity" name="quantity" required="required">
    </div>
    <div class="form-group col-md-6">
      <label for="gst">GST (in %) </label>
        <input type="text" class="form-control" id="gst" placeholder="GST" name="gst">
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="discount">Discount </label>
      <input type="text" class="form-control" id="discount" placeholder="Discount
      " name="discount">
    </div>
    <div class="form-group col-md-6">
      <label for="opening_stock">Opening Stock</label>
      <input type="text" class="form-control" id="opening_stock" placeholder="Opening Stock" name="opening_stock" disabled="">
    </div>
  </div>
 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="sale_price">Sale Price</label>
      <input type="text" class="form-control" id="sale_price" placeholder="Sale Price" name="sale_price" required="required">
    </div>
    <div class="form-group col-md-6">
      <label for="mrp">MRP</label>
      <input type="text" class="form-control" id="mrp" placeholder="MRP" name="mrp" required="required">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="purchage_price">Purchage Price</label>
      <input type="text" class="form-control" id="purchage_price" placeholder="Sale Price" name="purchage_price" required="required">
    </div>
    <div class="form-group col-md-6">
      <label for="mrp">Bar Code</label>
      <input type="text" class="form-control" id="mrp" placeholder="Bar Code" name="mrp">
    </div>
  </div>  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <?php
include('footer.php');
?>
  </body>
</html>