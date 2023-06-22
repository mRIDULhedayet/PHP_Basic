<?php
$a = 'string';
$string = 'STRING';
echo ${$a};
echo "<br>";
echo $$a;

/*Output:
STRING
STRING
*/
?>
