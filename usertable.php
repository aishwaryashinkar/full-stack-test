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
    $sql = "CREATE TABLE user (
	
    first_name VARCHAR(50) NOT NULL,
	last_name VARCHAR(50) NOT NULL,
    useremail VARCHAR(50) NOT NULL,
	password1 VARCHAR(50) NOT NULL,
    domain_id VARCHAR(50) NOT NULL,
skillset VARCHAR(50) NOT NULL
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table user created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?> 

