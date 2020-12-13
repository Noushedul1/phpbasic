<?php
// $dsn = "mysql:host=localhost; dbname=batch";

// $username = "root";
// $password = "";
// try{
// 	$conn = new PDO($dsn, $username, $password);
// 	$sql = "INSERT INTO southern(name, roll, email) 
// 	VALUES('noushedul isalm','30','nakib@gmail.com')";
// 	$datainsert = $conn->exec($sql);
// 	if($datainsert){
// 		echo "Data successfully inserted";
// 	}else{
// 		echo "not inserted.";
// 	}
// }
// catch(PDOException $e){
// 	echo "Fail", $e->getMessage();
// }

//multi data inserted

$dsn = "mysql:host=localhost; dbname=batch";
$username = "root";
$password = "";
try{
	$conn = new PDO($dsn, $username, $password);
	$conn->beginTransaction();
	$conn->exec("INSERT INTO southern(name, roll, email) 
	VALUES('arfat', '34', 'arfat@gmail.com')");
	$conn->exec("INSERT INTO southern(name, roll, email) 
	VALUES('Aysha', '12', 'aysha2c
	tgbd@gmail.com')");
	$conn->exec("INSERT INTO southern(name, roll, email) 
	VALUES('Tanjum', '22', 'shemani@gmail.com')");
	
	$q = $conn->commit();
	if($q) {
		echo "Inserted.".$q;
	}else{
		echo "Not inserted.";
	}

}
catch(PDOException $e){
	echo "Fail", $e->getMessage();
}


?>
