<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'rishika');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST["email"]);
      $mypassword = mysqli_real_escape_string($db,$_POST["psw"]); 
      
      $sql = "SELECT email,password FROM login1 WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
		 echo "success";
         $_SESSION['login_user'] = $myusername;
         
         header("location: homepage.html");
      }else {
		  echo "<script> alert('incorrect password');</script>";
		  header("location: finalminiproj.html");
         $error = "Your Login Name or Password is invalid";
      }
   }


?>