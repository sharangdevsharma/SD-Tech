
<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"sdtech");
$a=$_POST["user_email"];
$b=$_POST["user_password"];
$c=$_POST["confirm_password"];
echo$a."<br>";
echo$b."<br>";
echo$c."<br>";
$u="UPDATE signup SET user_password='$b',
confirm_password='$c' where user_email='$a'";
mysqli_query($conn, $u);
mysqli_close($conn);
echo"<h1>value inserted</h1>";
?>