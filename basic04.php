<?php
$a=16;

$b=4;
$c= "My PhP";

$sum=$a+$b;
$sub=$a-$b;
$multi=$a*$b;
$div=$a/$b;
$mod=$a%$b;
$expo=$a**$b;

echo $sum."<br>";
echo $sub."<br>";
echo $multi."<br>";
echo $div."<br>";
echo $mod."<br>";
echo $expo."<br>";

$a += 10;    # $a= $a +10;
echo $a."<br>";

$c .= " code.";  # concatenate string with (.= )
echo $c."<br>";

echo "<br>";
$d= &$b;         # $d = $b
echo $b."<br>";
echo $d;

/* Output:
20
12
64
4
0
65536
26
My PhP code.

4
4
*/

 ?>
