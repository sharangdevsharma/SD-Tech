<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sdtech";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT first_name,  last_name, father_name, mother_name, email, age, dob, 
education_qualification, comment FROM feedback";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
       echo "<br> First name :" . $row["first_name"] .
            "<br> Last name :" . $row["last_name"] .
            "<br> Father name :" . $row["father_name"] .
            "<br> Mother name :" . $row["mother_name"] .
            "<br>Email :" . $row["email"] .
            "<br> Age :" . $row["age"] .
            "<br> Date of Birth :" . $row["dob"] .
            "<br> Education Qualification:" . $row["education_qualification"] .
            "<br> comment :" . $row["comment"]."<br><br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
