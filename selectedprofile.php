<!DOCTYPE html>
<html>
<body>
<table cellpadding='10' width='100%'>
 <?php
$servername = "localhost";
$username = "root";
$password = "rashi512";
$dbname = "mini";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
$sql = "SELECT * FROM select1";
$result = mysqli_query($conn, $sql);

		echo "
		<tr>
		<th>Company Name
		<th>Useremail
		</tr>
		<tr> <td colspan=9><hr></td></tr>";


    
    while($row = mysqli_fetch_assoc($result)) {
	
       		
 		echo "<tr>";
            	echo '<td>'.$row["cname"];
		echo '<td>'.$row["useremail"];
		echo '<td>';
		echo '</tr>';
		echo '<tr> <td colspan=9><hr></td></tr>';
		
		
    }
 
}
mysqli_close($conn);
?>
</table> 
    </body>
</html>


