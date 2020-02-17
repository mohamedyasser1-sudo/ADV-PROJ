<?php 
include 'header.php';
$useridforblock = $_GET['id'];

    $sql="UPDATE  users
          SET active=0 WHERE id = '$useridforblock'";

   $res=mysqli_query($conn,$sql);

   if($res){
          $message = "updated successfully";
          header("location: advertisingusers.php");
   }else{
      $message= "failed".mysqli_error($conn);
   }

?>