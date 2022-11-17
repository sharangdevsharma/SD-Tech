<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"sdtech");
$a=$_POST["user_email"];
$b=$_POST["user_password"];
$c=$_POST["confirm_password"];
echo$a."<br>";
echo$b."<br>";
echo$c."<br>";


$z="insert into signup  value('$a','$b','$c')";
mysqli_query($conn, $z);
mysqli_close($conn);
echo"<h1>value inserted</h1>";
?>