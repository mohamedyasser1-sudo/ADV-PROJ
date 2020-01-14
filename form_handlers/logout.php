<?php
include 'connect/connect.php';
include 'login.php';


session_start();
session_unset();
session_destroy();
header("location: ../index.php");

?>