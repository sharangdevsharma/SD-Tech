<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "sdtech";  
	$db_table = "signup"; 
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
	
	$user_email = $_POST['user_email'];  
    $user_password = $_POST['user_password'];  
      
       
      
        $sql = "select *from signup where user_email = '$user_email' and user_password = '$user_password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1) {
        
         $_SESSION['user_email'] = $user_email;
         
         header("location: index.html");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   
?> 
