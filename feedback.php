<!doctype html>
<html>
<body style='background-image: url("bg3.png");'>
<p style="color:black; font-size:30px; text-align:center;">Feeback</p><br><br><hr><br><br>
<?php
echo "<style='padding:75px; margin: auto; text-align: center;'>";
$news="";
$con= mysqli_connect("localhost","root","","kiran");
$query= "SELECT * FROM info";
$result= mysqli_query ($con, $query);
if(mysqli_num_rows($result)>0)
{
echo "<table border='2' style='padding:25px; margin: auto; text-align: center;font-size:22px; color:black;'>
<tr>
<th>id</th>
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
echo "<p style='color:white; text-align:center;'>records not found</p>";
}
if(isset($_POST['delete']))
{
header('location:delete_feedback.php');
}
?>
<form action="feedback.php" method="post" style="padding:75px; margin: auto; text-align: center;">
<input type="submit" value="delete" name="delete" style="background-color: white; font-size: 25px; padding:10px;"><br><br>
</form>
</body>
</html>