<?php
	$db = mysqli_connect('localhost','root','','users');
	if(isset($_POST['submit']))
	{
		if($_POST['password']==$_POST['psw-repeat'])
		{
			$varemail=$_POST['email'];
			$varpass=$_POST['password'];
			$SQ="INSERT INTO login1 (email,password) VALUES ('$varemail','$varpass')";
			if(!mysqli_query($db,$SQ))
			{
				die("error:".mysqli_error($db));
			}
			header("Location:finalminiproj.html");
			die();
		}
	
		else
		{
			if($_POST['password']!=$_POST['psw-repeat'])
			{
				/*echo "<script type='text/javascript'>alert('Passwords do not match');</script>;*/
				header("Location:signup.html");
				die();
			}
			
		}
		

		
	}
	$conn->close();

?>