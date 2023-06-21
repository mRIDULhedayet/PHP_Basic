<?php

$day= date("D");
if ($day=="Fri") {
  // code...
  echo "Today is Friday.";
}
else {
  // code...
  echo "Today is not Friday.";
}
echo "<br>";
echo "<br>";
$a=10;
$b="string";
$c=1.23;
if (is_int($a) && is_string($b) && is_float($c)) {
  // code...
 echo "All execution returned true.<br>";
}
if (is_int($a) || is_float($b) || is_string($c)) {
  // code...
  echo "One, two or three out of three returned true.<br>";
}

echo "<br>";
echo "<br>";


if ($day=="Fri") {
  // code...
  echo "Today is Friday.";
}
elseif ($day=="Sat") {
  // code...
  echo "Today is Saturday.";
}
else {
  // code...
  echo "Today is Another day.";
}


/*Output:
Today is not Friday.

All execution returned true.
One, two or three out of three returned true.


Today is Another day. */

 ?>
