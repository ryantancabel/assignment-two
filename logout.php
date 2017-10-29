<?php

session_start();
unset($_SESSION['validated']);
header("Location: stafflogin.php");

?>

