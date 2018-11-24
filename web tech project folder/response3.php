<?php
$db = mysqli_connect('localhost','root','','users');
	if(isset($_POST["submit"])){
		$varname=$_POST['name'];
		$vargender=$_POST['gender'];
		$varage=$_POST['Age'];
		$varphone=$_POST['phone'];
		$varemail=$_POST['email'];
		$varbday=$_POST['bday'];
	

		$SQ="INSERT INTO data_users (name,gender,Age,phone,email,bday) VALUES ('$varname','$vargender','$varage','$varphone','$varemail','$varbday')";
		if(!mysqli_query($db,$SQ)){
			die("error:".mysqli_error($db));

		}
	}
	
	echo "<p><b><font color=blue face='arial' align='center' size='7pt'>$varname</font></b></p>";
	echo "<p><b><font color=blue face='arial' align='center' size='7pt'>Your Booking is successful!!<font></b></p>";
	mysqli_close($db);
?>