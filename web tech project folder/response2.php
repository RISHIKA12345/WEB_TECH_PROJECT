<html>
<body>
	 <?php
$servername = "localhost";
$username = "username";
$password = " ";

$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Create database
$sql = "CREATE DATABASE Rishika";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}
$sql = "CREATE TABLE appointment_details 
(
patient_name VARCHAR(30),
patient_number INT(10),
patient_email VARCHAR(30),
doctor VARCHAR(30)
)";

$sql1="CREATE TABLE login1
(email VARCHAR(320),password VARCHAR(30))";
mysqli_close($conn);
?>
	</body>
	</html>