<?php

$x=TRUE;
$y=100;
$z=3.1415;
var_dump(is_bool($x)); # check boolean data
echo "<br>";

var_dump(is_bool($y)); # check boolean data
echo "<br>";

var_dump($y);  #check integer
echo   "<br>";

var_dump($z);  # check float
echo "<br>";

$i = <<<HTML
<p>This is the string</p>
HTML;               # define string with heredoc
echo "$i"."<br>";

var_dump($i);   # display string and count string character
echo "<br>";

$j=10;
$j=(string)10; # type casting to string
var_dump($j);  # display string
echo "<br>";

$k=$j;
$k=(int)$k;  # type casting to integer
var_dump($k); # check int
echo "<br>";

$h=(array)$k;  # type casting to array
print_r($h);   # array print
echo "<br>";

var_dump($h);   # display array


/* Output:
bool(true)
bool(false)
int(100)
float(3.1415)

This is the string

string(25) "

This is the string
 "
string(2) "10"
int(10)
Array ( [0] => 10 )
array(1) { [0]=> int(10) } */

 ?>
