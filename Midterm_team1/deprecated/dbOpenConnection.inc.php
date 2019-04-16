<?php
define('DBHOST', 'localhost');
define('DBNAME', 'testDB2');
define('DBUSER', 'testuser');
define('DBPASS', 'b7e151');
define('DBCONNSTRING','mysql:host=localhost;dbname=testDB2;charset=utf8mb4;');

<p>dbOpenConnection Reached</p>
try {
#Step 1 Establish dB Connection
#PDO Stands for PHP DB Object
$pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);

$tempTitle = ""
$tempSubmitter = ""
$tempContent = ""

echo "DB Connection is successful.";
<p>DB Connection is successful</p>

#STEP 2.1 handle query errors
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}
#STEP 2: Handling connection errors
catch (PDOException $e){
	echo "DB Connection Failed...";
	<p>DB Connection Failed</p>
	die($e->getMessage());
}

?>
