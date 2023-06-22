<form action="basic10-form.php" method="post">
Name: <input name="fname" /><br>
Age: <input name="age" /><br>
<input type="submit" />
</form>


Welcome <?php echo $_POST["fname"]; ?>!<br>
You are <?php echo $_POST["age"]; ?> years old.


<?php
/*Output:
Welcome mridul!
You are 10 years old. */
echo "<br>";
 ?>

 <form action="basic10-form.php" method="get">
 My Name: <input name="myname" /><br>
 My Age: <input name="myage" /><br>
 <input type="submit" />
 </form>


 Welcome <?php echo $_GET["myname"]; ?>!<br>
 You are <?php echo $_GET["myage"]; ?> years old.


 <?php
 /*Output:
 Welcome mridul!
 You are 10 years old.
 URL: http://localhost/php%20basic/basic09-form.php?myname=mridul&myage=10
 */
  ?>
