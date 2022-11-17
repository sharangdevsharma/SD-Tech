<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"sdtech");

$a=$_POST["user_email"];
echo$a."<br>";
$d="delete from signup where user_email = '$a'";
mysqli_query($conn, $d);
mysqli_close($conn);
echo"<h1>value inserted</h1>";
?>

