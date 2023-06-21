<?php
$city = array("Dhaka", "Chittagong", "Rajshahi");

print_r($city); #output: Array ( [0] => Dhaka [1] => Chittagong [2] => Rajshahi )

echo "<br>";
echo "<br>";
Print "$city[2]"; //Output: Rajshahi
 ?>
<?php
echo "<br>";
echo "<br>";

$city=array(2=>"Dhaka", "Chittagong", "Rajshahi");
Print "$city[2]";  //Output: Dhaka

echo "<br>";
echo "<br>";
$place = array("Mirpur"=>12, "Dhanmondi"=>32, "Badda"=>3);
print_r(array_keys($place,32)); //output: Array ( [0] => Dhanmondi )

echo "<br>";
echo "<br>";

foreach ($place as $value) {
  print_r ($value. "<br>");
  /*output: 12
            32
            3
            */
}

echo "<br>";
echo "<br>";
 ?>
<?php


$letter= array("a","b","c","d","e"=>array("ae","be","ce","de","ee"=>array("aae","bbe","cce","dde","eee")));
var_dump($letter); //Output: array(5) { [0]=> string(1) "a" [1]=> string(1) "b" [2]=> string(1) "c" [3]=> string(1) "d" ["e"]=> array(5) { [0]=> string(2) "ae" [1]=> string(2) "be" [2]=> string(2) "ce" [3]=> string(2) "de" ["ee"]=> array(5) { [0]=> string(3) "aae" [1]=> string(3) "bbe" [2]=> string(3) "cce" [3]=> string(3) "dde" [4]=> string(3) "eee" } } }
echo "<br>";
echo "<br>";
print_r($letter); //Output: Array ( [0] => a [1] => b [2] => c [3] => d [e] => Array ( [0] => ae [1] => be [2] => ce [3] => de [ee] => Array ( [0] => aae [1] => bbe [2] => cce [3] => dde [4] => eee ) ) )

echo "<br>";
echo "<br>";

$number= range(1,10);
if(is_array($number)){
  echo "This is an array.<br>"; //Output: This is an array.
}
else {

  echo "This is not an array.<br>";
}
var_dump($number); //Output: array(10) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) [5]=> int(6) [6]=> int(7) [7]=> int(8) [8]=> int(9) [9]=> int(10) } 

 ?>
