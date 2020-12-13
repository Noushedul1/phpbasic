<?php
//there are many way to create numeric array
//string array
$akib = array("Noushed","Farhad","Anish","Fahim");
echo $akib[0]."<br>";
//intiger array 
$number = array(30,31,32,32);
echo $number[3]."<br>";

//another way to create array
$subjects = ["bangla","english","Web programming"];
echo $subjects[0]."<br>";

//i can add value indivitual which count with real array
$subjects[3] = "Database";
echo $subjects[3]."<br>";

//i can also add without index when i dont know index it count as last value
$subjects[] = "SPL";
echo $subjects[4]."<br>";

//use count to calculate how many array we have 
echo count($subjects)."<br>";

//use var_dump to know  value length and this values data type
//also how may array and position also.....
var_dump($subjects)."<br>";

//use print_r it's gives us whole array
print_r($subjects);
?>