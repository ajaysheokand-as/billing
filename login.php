<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<link rel="stylesheet" href="log_in_style.css">

<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php
 if(isset($_SESSION['success_msg'])){
?>    
  <div class="alert alert-danger"><?php echo $_SESSION['success_msg'] ?></div>
<?php } ?>

<?php
include('header.php');
?>
<!------ Include the above in your HEAD tag ---------->
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
    	<h1>Welcome</h1>
      <!-- <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" /> -->
    </div>

    <!-- Login Form -->
    <form action="logindb.php" method="POST">
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email Id">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password? &nbsp;&nbsp;</a>|
      <a class="underlineHover" href="#">&nbsp;Create Account</a>
    </div>

  </div>
</div>
</body>
</html>