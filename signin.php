<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"sdtech");
$a=$_POST["user_email"];
$b=$_POST["user_password"];

echo$a."<br>";
echo$b."<br>";


$z="insert into signin  value('$a','$b')";
mysqli_query($conn, $z);
mysqli_close($conn);
echo"<h1>value inserted</h1>";
?>