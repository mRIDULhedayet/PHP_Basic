<?php
$string="This is a string "." and Sum of A and B ="; # string concatenate with (.)

$int_A=50;
$_int_B=30;

echo "$string";
$sum=$int_A+$_int_B; # sum of two integer
echo " $sum"."<br>";
echo "<br>";

$str1="Example";
$str2="@gmail.com";
$emailAddress=$str1.$str2; # concatenate two string with (.)
echo $emailAddress."<br>";

echo "<br>";

echo $str1 .= $str2."<br>"; # concatenate two string with (.=)


$test1=0;
$test1++;     # increase the value by one
echo $test1;
echo "<br>";


$test2=10;
$test2--;         # decrease the value by one
echo "$test2"."<br>";


$test3= 5;
$test3=$test3+1;     # increase the value by one
echo "$test3"."<br>";

$test4= 5;
$test4=$test4-1;        # decrease the value by one
echo "$test4";

 ?>
