<!doctype html>
<html>
<body style='background-image: url("bg3.png");'>
<form action="delete_feedback.php" method="post" style="padding:75px; margin: auto; text-align: center;">
<p style="color:black; font-size:30px;">Enter id to delete the record :</p><input type="text" name="id"  style="height:30px;" ><br><br>
<input type="submit" value="delete" name="delete" style="background-color:white; font-size: 15px; padding:10px;">
<input type="submit" value="view feedback" name="feedback" style="background-color:white; font-size: 15px; padding:10px;">
</form><br><hr><br><br><br>
<?php
$id="";
if(isset($_POST['delete']))
{
$id=$_POST['id'];
$con=mysqli_connect("localhost","root","","kiran");
$query="DELETE FROM info WHERE id=$id";
if($con)
{
mysqli_query($con,$query);
if(mysqli_affected_rows($con)>0)
{
echo "<script>alert ('record is deleted')</script>";
}
else
{
echo "<script>alert ('record is not deleted')</script>";
}
}
}
?>
<?php
echo "<style='padding:75px; margin: auto; text-align: center;'>";
$con= mysqli_connect("localhost","root","","kiran");
$query= "SELECT * FROM info";
$result= mysqli_query ($con, $query);
if(mysqli_num_rows($result)>0)
{
echo "<table border='2'  style='padding:20px; margin: auto; text-align: center; color:black; font-size: 20px;'>
<tr><th>id</th>
<th>name</th>
<th>email</th>
<th>message</th></tr>";
while($row=mysqli_fetch_assoc($result))
{
//var_dump ($row);
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['message']."</td>";
echo "</tr>";
}
echo "</table>";
}
else
{
echo "<p style='color:black;text-align:center;'>records not found</p>";
}
if(isset($_POST['feedback']))
{
header('location:feedback.php');
}
?>
</body>
</html>