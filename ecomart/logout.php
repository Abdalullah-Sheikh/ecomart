<?php
session_start();

unset($_SESSION['cname']);

session_destroy();

header('Location:login.php');

?>