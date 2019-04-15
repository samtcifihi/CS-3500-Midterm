<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
 	<link rel="stylesheet" type="text/css" href="../css/styles.css" />

    <title>Comments</title>	
</head>

<body>
<div class="flex-wrapper">
<!--Header Include -->
 <?php include 'header.inc.php'; ?>

<!--dbOpenConnection Include -->
 <?php #include 'dbOpenConnection.inc.php'; ?>

<!-- Content -->
<div class="container" id="aboutContainer">
	<div class="row">
		<div class="col">
			<h2>Comments</h2>

			<form>
				<label>Title:</label>
				<input type="text" name="tempTitle"><br>

				<label>Submitted By:</label>
				<input type="text" name="tempSubmitter"><br>

				<label>Content:</label>
				<input type="text" name="tempContent"><br>

				<input type="submit" name="fsubmit">
			</form>
<?php
define('DBHOST', 'localhost');
define('DBNAME', 'testDB2');
define('DBUSER', 'testuser');
define('DBPASS', 'b7e151');
define('DBCONNSTRING','mysql:host=localhost;dbname=testDB2;charset=utf8mb4;');
echo "Definitions Successful";

function newComment($title, $submitter, $content) {

	try {
		#Step 1 Establish dB Connection
		#PDO Stands for PHP DB Object
		$pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);

		echo "DB Connection is successful.";

		#STEP Execute SQL Query
		$sql = "INSERT INTO comments VALUES (
				$title,
				$submitter,
				$content
			)";
		$statement = $pdo->prepare($sql);
		$statement->execute();

		#STEP 2.1 handle query errors
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		#dbCloseConnection
		$pdo=null;
	}
	#STEP 2: Handling connection errors
	catch (PDOException $e){
		echo "DB Connection Failed...";
		die($e->getMessage());
	}
}
?>
		</div>
	</div>
</div>

<?php
	echo "fsubmit ready";
	if (isset($_POST['fsubmit'])) {
		echo "fsubmit pressed";
		newComment($tempTitle, $tempSubmitter, $tempContent);
	}
	echo "fsubmit finished";
?>

<!-- End of Content -->

<!-- Footer Include-->
 <?php include 'footer.inc.php'; ?>


</body>

</html>
