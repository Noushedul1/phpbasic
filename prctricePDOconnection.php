<?php
	$dsn = "mysql:host = localhost; dbname = student";
	$db_user = "root";
	$db_password = "";
	try{
		$conn = new PDO($dsn, $db_user, $db_password);
		$username = "England";
        $password = "00100";
		$sql = "INSERT INTO studentlogin(username,password) VALUES
		('$username','$password')";
		$conn->exec($sql);
		echo "I row added";
	}
	catch(PDOExcection $e){
		echo "Fail", $e->getMessage();
	}
?>