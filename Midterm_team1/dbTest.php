<?php
#define('DBHOST', '107.180.56.180');
define('DBHOST', 'localhost');
define('DBNAME', 'testDB2');
define('DBUSER', 'testuser');
define('DBPASS', 'b7e151');
#define('DBCONNSTRING','mysql:host=107.180.56.180;dbname=testDB2;charset=utf8mb4;');
define('DBCONNSTRING','mysql:host=localhost;dbname=testDB2;charset=utf8mb4;');

try {
#Step 1 Establish dB Connection
#PDO Stands for PHP DB Object
$pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);

echo "DB Connection is successful.";

#STEP 2.1 handle query errors
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

#STEP Execute SQL Query
$sqlCreate = "CREATE TABLE TestTable (
		testParam1 CHAR(20),
		testParam2 CHAR(20),
		testParam3 CHAR(20)
	);";

$sqlAdd = "INSERT INTO TestTable VALUES (
		'testA1',
		'testA2',
		'testA3'
	);";

$sqlRead = "SELECT * FROM TestTable;";


	$pdo->query($sqlCreate);
	$pdo->query($sqlAdd);
	$result = $pdo->query($sqlRead);

#STEP 4 Process Query Results
while ($row = $result->fetch()) {

	echo "<br>".$row['testParam1']." ".$row['testParam2']." ".$row['testParam3'];
}

#Step 5 Close Connection and Free Resources.
$pdo=null;

}
#STEP 2: Handling connection errors
catch (PDOException $e){
	echo "DB Connection Failed...";
	die($e->getMessage());
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Lab 14 PHP working databases</title>
</head>

<body>
	<h1>PHP Working with Databases</h1>
</body>

</html>
