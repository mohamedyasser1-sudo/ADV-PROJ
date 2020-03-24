<?php 
include 'header.php';

if(isset($_GET['advid'])){
$useridforblock = $_GET['advid'];

    $sql="UPDATE  users
          SET active=0 WHERE id = '$useridforblock'";

   $res=mysqli_query($conn,$sql);

   if($res){
          $message = "updated successfully";
          header("location: advertisingusers.php");
   }else{
      $message= "failed".mysqli_error($conn);
   }
}elseif(isset($_GET['hostid'])){

$useridforblock = $_GET['hostid'];

   $sql="UPDATE  users
          SET active=0 WHERE id = '$useridforblock'";

   $res=mysqli_query($conn,$sql);

   if($res){
          $message = "updated successfully";
          header("location: hostingusers.php");
   }else{
      $message= "failed".mysqli_error($conn);
   }

}
?>