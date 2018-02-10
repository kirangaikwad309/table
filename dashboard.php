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
<!-- <div class="w3-top"> 
  <div class="w3-bar w3-black w3-card-2">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Insert</a>
    <a href="#about us" class="w3-bar-item w3-button w3-padding-large w3-hide-small">delete</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">update</a>
    </div>
   </div>
-->
 <!-- <?php 
$news="";
if(isset($_POST['insert']))
{

$news=$_POST['news'];
$con=mysqli_connect("localhost","root","","kiran");
$query="INSERT INTO interior_news(news) VALUES ('$news')";
if($con)
{ 

	mysqli_query($con,$query);
	if(mysqli_affected_rows($con)>0)
	{
	echo "<p style='color:white; text-align:center;'>news inserted</p>";
	}
	else
	{
	echo "<p style='color:white;text-align:center;'>news not inserted</p>";
	}
 }
}
?> -->
<form action="dashboard.php" method="post" style="padding:75px; margin: auto; text-align: center;">
<!--<p style="color:white; font-size:30px;">News</p><textarea rows="4" cols="50" name="news"></textarea><br><br>
 <input type="submit" value="insert" name="insert" style="background-color: #555555; font-size: 15px; padding:10px;"> 
<input type="submit" value="delete" name="delete" style="background-color: #555555; font-size: 15px; padding:10px;">
<input type="submit" value="update" name="update" style="background-color: #555555; font-size: 15px; padding:10px;">
<input type="submit" value="update" name="update" style="background-color: #555555; font-size: 15px; padding:10px;">-->
<a href="feedback.php"><input type="submit" value="ViewFeedback" name="feedback" style="background-color: white; font-size: 15px; padding:10px; margin-top:200px"></a>
<br> <br><br><br><br><br><br>
<?php
echo "<style='padding:75px; margin: auto; text-align: center;'>";
/*$news="";
$con= mysqli_connect("localhost","root","","kiran");
$query= "SELECT * FROM interior_news";
$result= mysqli_query ($con, $query);
if(mysqli_num_rows($result)>0)
{
echo "<table border='2' style='padding:25px; margin: auto; text-align: center; color:white;'>
<tr>
<th>News</th></tr>";
while($row=mysqli_fetch_assoc($result))
{
//var_dump ($row);
echo "<tr>";
echo "<td>".$row['news']."</td>";
echo "</tr>";
}
echo "</table>";
}
else
{
echo "<p style='color:white;text-align:center;'>records not found</p>";
}
if(isset($_POST['delete']))
{
header('location:delete.php');
}
if(isset($_POST['update']))
{
header('location:update.php');
}*/
if(isset($_POST['feedback']))
{
header('location:feedback.php');
}
?>
</div>
<br>
<!-- <iframe src="news.php" height="200" width="600" style="border:2px solid grey";> </iframe> -->
</form>
</body>
</html>