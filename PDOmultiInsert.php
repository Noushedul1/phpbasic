<?php
  $dsn = "mysql:host=localhost; dbname=student"; //our driver anme is mysql
  $db_user = "root";
  $db_password = "";

  try{
  	$conn = new PDO($dsn, $db_user, $db_password); //we create an object thats why use new
    $conn->beginTransaction();

    $conn->exec("INSERT INTO studentlogin(username,password) 
      VALUES('bangladesh','3345')");
    $conn->exec("INSERT INTO studentlogin(username,password) 
      VALUES('India','3346')");
    $conn->exec("INSERT INTO studentlogin(username,password) 
      VALUES('USA','3347')");

    $conn->commit();
    echo "New record successfully added";
  }
  catch(PDOException $e){ //e is object
    $conn->rollback();
  	echo "Fail", $e->getMessage(); //its for debugging
  }
  ?>