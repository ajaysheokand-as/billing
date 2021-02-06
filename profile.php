<?php
session_start();
include('config.php');
$sql = "SELECT * FROM createaccount" ;
$result = $conn->query($sql);
// print_r($result);
while ($row = mysqli_fetch_assoc($result)) {
   echo $row['email'];
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
     <div class="card mt-5 border-5 pt-2 active pb-0 px-3">
         <div class="card-body ">
             <div class="row">
                 <div class="col-12 ">
                     <h4 class="card-title ">Hii.. <strong> AJAY SHEOKAND </strong> Your Welcome in Digital Billing</h4>
                 </div>
                 
             </div>
         </div>
         <div class="card-footer bg-white px-0 ">
             <div class="row">
                 <div class=" col-md-auto "> <a href="#" class="btn btn-outlined btn-black text-muted bg-transparent" data-wow-delay="0.7s"><img src="https://img.icons8.com/ios/50/000000/settings.png" width="19" height="19"> <small>SETTINGS</small></a>  </div>
             </div>
         </div>
     </div>
 </div>
  </body>
</html>