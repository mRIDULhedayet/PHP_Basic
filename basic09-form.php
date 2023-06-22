<form action="basic09-form.php" method="post">
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

 ?>
