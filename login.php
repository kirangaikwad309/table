<!doctype html>
<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body style='background-image: url("bg3.png");'>


<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card-2">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#about us" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT US</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    </div>
   </div>



<?php
session_start();
$con=mysqli_connect("localhost","root","","kiran");
if(isset($_POST['login']))
   {
   if($con)
   {
$user_name=$_POST['username'];
$pwd=$_POST['password'];
$query="SELECT * FROM session WHERE username='".$user_name."' and password='".$pwd."' ";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
   {
while($row=mysqli_fetch_assoc($result))
   {
session_start();
$_SESSION['user_name']=$row['username'];
$_SESSION['user_role']=$row['role'];
header('location:dashboard.php');
   }
   }
else
  {
echo "<script>alert('invalid login')</script>";
  }
}
}
?>
<form action="login.php" method="post" style="padding:75px; margin: auto; text-align: center;">
<h3 style="color:black;">User name:<input type="text" name="username" ></h3><br>
<h3 style="color:black;">Password :<input type="password" name="password" ></h3><br><br>
<input type="submit" name="login" value="Login" style="background-color: white; font-size: 20px; padding:10px;">
<input type="reset" name="clear" value="Clear" style="background-color: white; font-size: 20px; padding:10px;">
</form>
</body>
</html>