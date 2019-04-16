<!-- Connection Details -->

<?php
	$connection = mysqli_connect('localhost', 'testuser', 'b7e151', 'testDB2');

	// On Connection Failure
	if(!$connection){
		echo "Error: Unable to connect to MySQL." . PHP_EOL;
    		echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    		echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    		exit;
	}
?>
