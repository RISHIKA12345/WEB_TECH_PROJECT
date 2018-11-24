<?php
		/*$servername = "localhost";
		$username  = "root";
		$password = "";
		$dbname = "users";

		$conn = new mysqli($servername,$username,$password,$dbname);

		if($conn->connect_error)
		{
			die("Connection failed:".$conn->connect_error);
		}

		$sql ="SELECT email,password FROM login1 ";
		$result = $conn->query($sql);
		$t=0;*/
		if($_POST['email']=="abc@gmail.com" && $_POST['password']=="123")
		{
			header("Location:homepage.html");
			die();
		}

		/*$servername = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "users";

    $conn = mysqli_connect($servername, $username, $password, $databaseName);

    $un = $_POST['email'];
    $pw = $_POST['password'];
    print $pass . "_" . $email;

    $query = mysqli_query($conn, "SELECT email,password FROM login1 WHERE email='$un' AND password='$pw'");

    $result_can = mysqli_query($conn, $query);


    while ($row = mysql_fetch_assoc($result_can)) {


        $check_username = $row['email'];
        $check_password = $row['password'];
    }
    if ($un == $check_username && $pw == $check_password) {
        $message = "ok";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location: homepage.html");
    } else {
        $message = "No";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location: finalminiproj.html");
    }

	/*	if($result->num_rows>0)
		{

			while($row=$result->fetch_assoc() && $t==0)
			{

				if($_POST['email']==$row['email'])

				{
					echo"<script>alert('fck you')</script>";
					if($_POST['password']==$row['password'])
					{
						echo"<script>alert('fck you')</script>";
						header("Location:homepage.html");
						die();
					}	

					else
					{
						echo"<script>alert('You entered the wrong password');</script>";
						header("Location:finalminiproj.html");
						die();
					}

				}
			}
		}
		*/
?>