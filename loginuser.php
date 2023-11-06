 <?php
session_start();
$servername = "localhost";
$username = "root";
$password = "rashi512";
$dbname = "mini";

$useremail = $_POST['useremail'];
$password1 = $_POST['password1'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * from user where useremail='$useremail' and password1='$password1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
//echo "login successful";
	$_SESSION['useremail']=$useremail;
    header("Location:buser.php");
		
	
} 

else {
    echo "Please enter valid Username or Password";
}
$conn->close();
?> 

