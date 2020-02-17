<?php
ob_start();
$message= "";
  if(isset($_POST['updateprofile'])){
    $username= $_POST['username'];
    $firstname= $_POST['firstname'];
    $secondname=$_POST['secondname'];
    $sql="UPDATE  `users`
          SET 
          `username`= IF('$username' = '', `username`, '$username'),
          `first_name` = IF('$firstname' = '', `first_name`, '$firstname'),
          `second_name` = IF('$secondname' = '', `second_name`, '$secondname') WHERE `id` = '$user_id'";

   $res=mysqli_query($conn,$sql);

   if($res){
          $message = "updated successfully";
          header("location: user.php");
   }else{
      $message= "failed".mysqli_error($conn);
   }


  }
  if(isset($_POST['updatepassword'])){
    $oldpassword=$_POST['oldpassword'];
    $newpassword=$_POST['newpassword'];
    $confirmpassword=$_POST['confirmpassword'];

    if(empty($oldpassword) || empty($newpassword) || empty($confirmpassword)){
      $message = "you can't leave feilds empty "; 
    }
    if ($newpassword != $confirmpassword){
      $message =  "Passwords does not match  !"; 
    }foreach($userprofiledata as $profiledata){
     $savedpassword=  $profiledata['password']; 

     if($savedpassword != $oldpassword){
      $message = "your old password is not correct";
     }else{
          $sql="UPDATE  users SET password = '$newpassword' WHERE id = '$user_id'";

           $res=mysqli_query($conn,$sql);

           if($res){
                  $message = "updated successfully";
                  header("location: user.php");
           }else{
              $message= "failed".mysqli_error($conn);
           }

    }
   }

  } 
?>
