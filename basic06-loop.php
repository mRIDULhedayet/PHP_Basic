<?php
$a=1;
while($a < 6) {
  // code...
echo "A counter start from \n".  $a ."<br>";
$a++;
}
echo "<br>";
echo "<br>";


$b=6;
do {
  // code...
  echo "A counter start from \n".  $b ."<br>";
  $b++;
}
while($b < 6);

echo "<br>";
echo "<br>";

for ($i=0; $i <5 ; $i++) {
  // code...
  echo "A counter start from \n".  $i ."<br>";
}
echo "<br>";
echo "<br>";


for ($j=0;  ; $j++) {
  // code...
  if ($j>5) {
    // code...
    break;
  }
  echo "A counter start from \n".  $j ."<br>";
}

 ?>
<?php for ($i=0; $i <5 ; $i++): ?>
  <p> A counter start from <?php echo $i; ?></p>
<?php endfor; ?>



<?php

echo "<br>";
echo "<br>";
$h=10;
$x="*";
function pyramid($h,$x){
for ($i=0; $i <=$h ; $i++) {
  for ($j=0; $j <=$i ; $j++) {
    echo $x;
  }
  echo "<br>";
}
}
pyramid($h,$x);



 ?>


 <?php
 echo "<br>";
 echo "<br>";
 $m=10;
 $n="*";
 function pyramid1($m,$n){
 for ($i=0; $i <=$m ; $i++) {
   for ($j=0; $j <=$i ; $j++) {
     echo (" &nbsp;");
   }
   for ($k=$m; $k >=$i ; $k--) {
     echo $n;
   }
   echo "<br>";
 }
 }
 pyramid1($m,$n);


  ?>


<?php
/*Output:
A counter start from 1
A counter start from 2
A counter start from 3
A counter start from 4
A counter start from 5


A counter start from 6


A counter start from 0
A counter start from 1
A counter start from 2
A counter start from 3
A counter start from 4


A counter start from 0
A counter start from 1
A counter start from 2
A counter start from 3
A counter start from 4
A counter start from 5

A counter start from 0

A counter start from 1

A counter start from 2

A counter start from 3

A counter start from 4


*
**
***
****
*****
******
*******
********
*********
**********
***********


 ***********
   **********
     *********
       ********
         *******
           ******
             *****
               ****
                 ***
                   **
                     *
*/


 ?>
