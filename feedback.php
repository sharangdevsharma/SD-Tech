<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,"sdtech");
$a=$_POST["first_name"];
$b=$_POST["last_name"];
$c=$_POST["father_name"];
$d=$_POST["mother_name"];
$e=$_POST["email"];
$f=$_POST["age"];
$g=$_POST["dob"];
$h=$_POST["education_qualification"];
$i=$_POST["comment"];
echo$a."<br>";
echo$b."<br>";
echo$c."<br>";
echo$d."<br>";
echo$e."<br>";
echo$f."<br>";
echo$g."<br>";
echo$h."<br>";
echo$i."<br>";

$z="insert into feedback value('$a','$b','$c','$d','$e','$f','$g','$h','$i')";
mysqli_query($conn, $z);
mysqli_close($conn);
echo"<h1>value inserted</h1>";
?>