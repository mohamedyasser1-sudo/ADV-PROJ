<?php
include 'connect/connect.php';
include 'login.php';

//session_start();
session_destroy();
echo 'You have been logged out. <a href="/">Go back</a>';

?>