<?php
session_start();

unset($_SESSION['id']);
unset($_SESSION['cu']);
unset($_SESSION['role']);
//session_destroy();
header("location: index.php");
?>