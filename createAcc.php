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

    <title>Create Account</title>
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
  <div class="alert alert-danger"><?php echo $_SESSION['success_msg'] ?></div>
<?php } ?>

<?php
include('header.php');
?>
<div class="container">
  <form action="createAccdb.php" method="POST">
    <div class="form">

    <h1>Create Accout</h1>
    <form>
       <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Name" name="name" required="required">
    </div>
    <div class="form-group col-md-6">
      <label for="mobile_no">Mobile No.</label>
      <input type="text" class="form-control" id="mobile_no" placeholder="Mobile No." name="mobile_no" required="required">
    </div>
  </div>
      <div class="form-row">
    <div class="form-group col-md-6">
      <label for="gst_no">GST No.</label>
      <input type="text" class="form-control" id="gst_no" placeholder="GST No." name="gst_no" required="required">
    </div>
    <div class="form-group col-md-6">
      <label for="old_balance">Old Balance</label>
      <input type="text" class="form-control" id="old_balance" placeholder="Old Balance" name="old_balance" required="required">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Email" name="email" required="required">
    </div>
    <div class="form-group col-md-6">
      <label for="gender">Gender</label>
       <select id="gender" class="form-control" name="gender" placeholder="Email">
        <option selected >Select</option>
        <option >Male</option>
        <option>Female</option>
      </select>
    </div>
  </div>
   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Password" name="password" required="required">
    </div>
    <div class="form-group col-md-6">
      <label for="confirm_password">Confirm Password</label>
      <input type="text" class="form-control" id="confirm_password" placeholder="Confirm Passoword" name="confirm_password" required="required">
    </div>
  </div>
  <div class="form-group">
    <label for="city">Address</label>
    <input type="text" class="form-control" id="city" placeholder="1234 Main Street" name="address" required="required">
  </div>
 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="city">City</label>
      <input type="text" class="form-control" id="city" name="city" required="required">
    </div>
    <div class="form-group col-md-4">
      <label for="state">State</label>
      <select id="state" class="form-control" name="state" required="required">
        <option selected>Haryana</option>
        <option>Other</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="pin_code">Pin Code</label>
      <input type="text" class="form-control" id="pin_code" placeholder="Pin Code" name="pin_code" required="required">
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