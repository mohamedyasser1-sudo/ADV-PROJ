<?php
$conn=mysqli_connect('localhost', 'topadn6_root', '.)@[4jW.y0B7' , 'topadn6_project' );
$name="SET NAMES utf8";
mysqli_query($conn,$name);
if (mysqli_connect_errno())

{
    echo "MySQLi Connection was not established: " . mysqli_connect_error();
}
?>