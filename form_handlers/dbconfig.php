<?php
$db_host = "localhost";
$db_name = "topadn6_project";
$db_user = "topadn6_root";
$db_pass = ".)@[4jW.y0B7";

try{
    $db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
    $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo $e->getMessage();
}
?>
