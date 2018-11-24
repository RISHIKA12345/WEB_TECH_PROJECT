
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
	mysqli_close($db);
?>


<html>
<style type="text/css">
	div{
		size: "+2";
		
		font-family: sans-serif;

		
	}
</style>
<body>
	<p> <b><font color="#1A5276" size="+2">Get an appointment</font></b></br>
	</br>
</br>
</br>
</br>
<div>
	<form method="POST" action="app1.php">
	 <label style="top:14%;left:0%;position:absolute;">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" required name="name" value="name" style="top:14%;left:20%;position:absolute;"></br>
	 <label style="top:20%;left:0%;position:absolute;">Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="radio" required name="gender" value="gender" style="top:20%;left:20%;position:absolute;"><label style="top:20%;left:23%;position: absolute;">Male</label>
	 <input type="radio"  name="gender" value="gender" style="top:20%;left:28%;position:absolute;"><label style="top:20%;left:31%;position: absolute;">Female</label>
	 <label style="top:26%;left:0%;position:absolute;">Date of Birth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="date" name="bday" style="top:26%;left: 20%;position: absolute;";>
	   <label style="top:32%;left:0%;position: absolute;">Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" name="Age" style="top:32%;left:20%;position: absolute;">
	   <label style="top:38%;left: 0%;position: absolute;">Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="text" name="phone" required   style="top:38%;left:20%;position:absolute;">
	   <label style="top:44%;left: 0%;position: absolute;">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="email" name="email" style="top: 44%;left:20%;position: absolute;">
	   <b><font style="top:50%;left:1.5%;position: absolute;" size="+2" color="#1A5276">Appointment Details</font></b>
	   <label style="top:58%;left:0%;position: absolute;">Hospital&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><select style="top:58%;left:20%;position: absolute;">
	   	
	   	<option value="jaynagar">Omega hospitals,jaynagar</option>

	   	<option value="vijaynagar">Omega hospitals,vijaynagar</option>

	   	<option value="girinagar">Omega hospitals,girinagar</option>
	   </select>

	   	<label style="top:64%;left:0%;position: absolute;">Speciality&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
	   	<select style="top:64%;left:20%;position: absolute;">
	   	
	   	<option >dermetalogy</option>

	   	<option >Cardiology</option>

	   	<option >ENT</option>
	   	<option>Oncology</option>
	   	<option>Neurology</option>
	   	<option>Pediatrics</option>
	   	<option>Gynecology</option>
	   </select>

	   <label style="top:70%;left:0%;position: absolute;">Doctors:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>

	   <select style="top:70%;left:20%;position: absolute;">
	   <option>Dr Rahul Agarwal , Cardiac Sciences</option>
	   <option>Dr Anoop Agarwal,  Cardiac Sciences</option>
	   <option>Dr Soma Raju ,  Cardiac Sciences</option>
	   <option>Dr Johann Christopher ,  Cardiac Sciences</option>
	   <option>Dr G Pramoda,Dermetalogy</option>
	   <option>Dr P L Chandravathi,Dermetalogy</option>
	   <option>Dr Swapna Priya,Dermetalogy</option>
	   <option>Dr CH Murali Kondaiah , ENT</option>
	   <option>Dr N Rajashekaram , ENT</option>
	   <option>Dr Vishnu Swaroop , ENT</option>
	   <option>Dr T V Rama Krishna Murthy , Neuro Sciences</option>
	   <option>Dr Syed Ameer Basha Paspala, Neuro Sciences</option>
	   <option> Dr Shyam K Jaiswal, Neuro Sciences </option>
	   <option>Dr J M K Murthy, Neuro Sciences</option>
</select>
<label style="top:78%;left:0%;position:absolute;">Appointment Category&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label><input type="radio"  name="visit" value="visit" style="top:78%;left:20%;position:absolute;"><label style="top:78%;left:23%;position: absolute;">First visit</label>
	 <input type="radio"  name="visit" value="visit" style="top:78%;left:28%;position:absolute;"><label style="top:78%;left:31%;position: absolute;">Follow up visit</label>-->

	 <input type="submit" name="submit" value="submit" style="color: #1A5276;top:84%;left:0%;position: absolute;">
	 <input type="reset" name="reset" style="color: #1A5276;top:84%;left:5%;position: absolute;">

	</form>
</div>
</body>
</html>