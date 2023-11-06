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
$sql = "SELECT * FROM apply";
$result = mysqli_query($conn, $sql);
echo "<form action='selected.php' method='post'>";
		echo "
		<tr>
		
		<th>Company
		<th>Useremail
		<th>Selected
		</tr>
		<tr> <td colspan=9><hr></td></tr>";


    
    while($row = mysqli_fetch_assoc($result)) {		
		
       		
 		echo "<tr>";
		$id=$row["id"];
		echo '<td>'.$row["useremail"];
		echo '<td>'.$row["cname"];
		echo "<td><input type='checkbox' name='check_list[]' value='$id'>";
		echo '</td>';
		echo '</tr>';
		//echo '<tr> <td colspan=9><hr></td></tr>';		
		
    }
 echo "<center><input type = 'submit' value='selected'></center></form>";
}
mysqli_close($conn);
?>
</table> 
   </body>
</html>


