<!DOCTYPE HTML>

<?php

        if(isset($_SESSION['validated']) && $_SESSION['validated'] == true)
        {
                header("Location: staffsettings.php");
        }
        else
        {
         include 'process.php';
        }
?>

<html>

<body>
<? if(isset($_REQUEST["err"])&& $_REQUEST["err"] =="mismatch") { ?>
<span style="color:red">Your details do not match a supported staff member!</span>
<? } ?>

<p> Enter your details </p>

<form action="process.php" method="post">

        <label> Name: <input type="text" name="adminName" /> </label> </br>
        <label> Password: <input type="password" name="pass" /> </label> </br>
        <input type="submit" name="Submit1"  value="Submit" /> </br>
</form>

<br />
<br />

</body>

</html>

