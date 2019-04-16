<?php
try {
#STEP Execute SQL Query

$sql = "INSERT INTO comments VALUES (
		$tempTitle,
		$tempSubmitter,
		$tempContent
	)";
}
#STEP 2: Handling connection errors
catch (PDOException $e){
	echo "DB Connection Failed...";
	die($e->getMessage());
}

?>
