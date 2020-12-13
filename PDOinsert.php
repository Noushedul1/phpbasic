<?php
  $dsn = "mysql:host=localhost; dbname=student"; //our driver anme is mysql
  $db_user = "root";
  $db_password = "";

  try{
  	$conn = new PDO($dsn, $db_user, $db_password); //we create an object thats why use new
    $username = "Joy";
    $password = "0010";
  	$sql = "INSERT INTO studentlogin(username, password) 
    VALUES('$username','$password')";
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    // $effected_row = $conn->exec($sql);
    // echo $effected_row ." Effected Row <br>";
    echo "One row recorder and last inserted id is: ". $last_id;
  }
  catch(PDOException $e){ //e is object
  	echo "Fail", $e->getMessage(); //its for debugging
  }
  ?>