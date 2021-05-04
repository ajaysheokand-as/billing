<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Billing Website</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/69822a6ea8.js" crossorigin="anonymous"></script>

    <style type="text/css">
     
      .col {
        /*border: 1px solid green;*/
        padding: 10px;
        margin: 10px;
        text-align: center;
        height: 54px;
        /*width: 55px;*/
        border-radius: 10px;
         background-color: #dde6ed;
      }

      .col a {
        border-radius: 10px;
        /*border: solid 1px;*/
        padding: 15px;
        margin: 10px;
        text-decoration: none;
        font-size: 18px;
        font-weight: bold;
        color: black;
      }

      .col:hover{
        background-color: #0e5ce3;

      }

      .col a:hover{
        color: white;
      }
    </style>
  </head>
  <body>
   <?php
    include('header.php');
    include('profile.php');
   ?>

   <div class="container">
   <h3>Main Activity</h3><hr>
  <div class="container my-container">
        <div class="row my-row">
          <div class="col my-col">
            <a href="sale.php" ><img src="image/invoices.png" height="30px" width="30px"> Sale </a> 
          </div>
          <div class="col my-col">
            <a href=""> Account </a>
          </div><div class="col my-col">
            <a href="">  Purchase </a>
          </div><div class="col my-col">
            <a href=""> Account </a>
          </div>
        </div>

        <div class="row my-row">
          <div class="col my-col">
            <a href="newProduct.php">Add Product </a>
          </div>
          <div class="col my-col">
            <a href=""> Stock </a>
          </div><div class="col my-col">
            <a href=""> GST </a>
          </div><div class="col my-col">
            <a href=""> Final Report </a>
          </div>
        </div>

        <div class="row my-row">
          <div class="col my-col">
            <a href=""> Complaint </a>
          </div>
          <div class="col my-col">
            <a href=""> Satting </a>
          </div><div class="col my-col">
            <a href=""> Daily Report </a>
          </div><div class="col my-col">
            <a href=""> User </a>
          </div>
        </div>
        
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
    <!-- Footer  -->

<?php 
include('footer.php');
 ?>
  </body>
</html>