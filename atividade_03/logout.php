<?php
session_start();
unset($_SESSION['logou']);

header("location: projeto3.php");
?>