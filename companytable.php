 <?php
$servername = "localhost";
$username = "root";
$password = "rashi512";
$dbname = "mini";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE company (
    cname VARCHAR(50) NOT NULL,
	cdescription VARCHAR(50) NOT NULL,
    cemail VARCHAR(50) NOT NULL unique,
	cpassword VARCHAR(50) NOT NULL,
    location VARCHAR(50) NOT NULL,
cdomain VARCHAR(50) NOT NULL,
req_skills VARCHAR(50) NOT NULL,
duration VARCHAR(50) NOT NULL,
offering VARCHAR(50) NOT NULL)";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table comapny created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?> 

