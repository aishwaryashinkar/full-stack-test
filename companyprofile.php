<!DOCTYPE html>
<html>
<body>
<table cellpadding='10' width='100%' text-align="center">
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
$sql = "SELECT cname,cdescription,cemail,location,cdomain,req_skills,duration,offering FROM company";
$result = mysqli_query($conn, $sql);

		echo "
		<tr>
		<th>Company Name
		<th>Company Description
		<th>Company Email
		<th>Location 
		<th>Company Domain
		<th>Req_skills
		<th>Duration
		<th>Offering
		</tr>
		<tr> <td colspan=9><hr></td></tr>";


    
    while($row = mysqli_fetch_assoc($result)) {
	
       		
 		echo "<tr>";
            	echo '<td>'.$row["cname"];
		echo '<td>'.$row["cdescription"];
		echo '<td>'.$row["cemail"];
		echo '<td>'.$row["location"];
		echo '<td>'.$row["cdomain"];
		echo '<td>'.$row["req_skills"];
		echo '<td>'.$row["duration"];
		echo '<td>'.$row["offering"];
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


