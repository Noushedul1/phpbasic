<?php
  $dsn = "mysql:host=localhost; dbname=student"; //our driver anme is mysql
  $db_user = "root";
  $db_password = "";

  try{
  	$conn = new PDO($dsn, $db_user, $db_password); //we create an object thats why use new
  	echo "Connected";
  }
  catch(PDOException $e){ //e is object
  	echo "Fail", $e->getMessage(); //its for debugging
  }
  ?>