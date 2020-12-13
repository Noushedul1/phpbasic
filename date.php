<?php

// echo date("d");
// echo date("m");
// echo date("Y");
// echo date("l");
// echo date("d/m/Y");
// echo date("Y/m/d");
// echo date("Y-m-d");

// echo date("h");
// echo date("i");
// echo date("s");
// echo date("a");
// date_default_timezone_get('Bangladesh/Dhaka');
// echo date("h:i:sa");

// $timestamp = mktime(10,3,5,22,11,1990);
// echo $timestamp;
// echo date("d/m/Y h:i:sa", $timestamp);

$timestamp2 = strtotime("8:00pm May 22 2020");
echo date("d/m/Y h:i:sa", $timestamp2)."<br>";

$timestamp3 = strtotime("Tomorrow");
echo date("d/m/Y h:i:sa", $timestamp3)."<br>";

$timestamp4 = strtotime("next sunday");
echo date("d/m/Y h:i:sa", $timestamp4)."<br>";

$timestamp = strtotime("+2 Days");
echo date("d/m/Y h:i:sa", $timestamp4)."<br>";

?>