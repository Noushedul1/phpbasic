<?php
// string
$akib = "noushedul islam";
echo $akib;
echo "<br>";
//float
$float = 4.78;
echo $float ."<br>";

//integer add with + sign
$integer1 = 10;
$integer2 = 20;
$integer = $integer1 + $integer2;
echo $integer."<br>";

//two string concatination with . not +
//to create space use single quote with space like ' '
$string1 = "akib";
$string2 = "Noushed";
$string = $string1 .' '.$string2;
echo $string."<br>";

//float adding
$float1 = 4.34;
$float2 = 3.56;
$float = $float1 + $float2;
echo $float."<br>";

//when you sure this value never gonna change then ude define
//it is casesensitive ...casesensitive remove when you use use true perameter
define('AKIB','How are you?');
echo AKIB;
?>