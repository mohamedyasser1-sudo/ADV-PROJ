<?php 
session_start();
include 'connect/connect.php';
$message ="";
if(isset($_SESSION['email'])){
   header("Location: ./index.php"); 
}else{
	if (isset($_POST['login'])){	
		$email        =$_POST['email'];
		$pass         =$_POST['pass'];
		$checkuser="SELECT * FROM users WHERE email = ? AND password = ?";
		$stmt =mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$checkuser)){
            exit();
        }else{
		mysqli_stmt_bind_param($stmt,"ss",$email,$pass);
		mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
		if(mysqli_stmt_num_rows($stmt) != 1 ){
			$message = "your information is not correct please write the correct information or <a href='signup.php'>Sign Up</a>";
		}

		else{
			  //$_SESSION['email'] = true;
			  $_SESSION['email'] = $email;
			  if(isset($_SESSION['email'])){
			  $user_info= mysqli_query($conn,"SELECT * FROM users WHERE email = '$email'");
			  $row = mysqli_fetch_array($user_info);
			  $user_id = $row['id'];
			  $user_type = $row['type'];
			  $user_status = $row['active'];
			  if($user_status == 0 ){
			  	echo "you are blocked ";
			  	header("Location: ./user_dashboard/examples/block.php");
			  }elseif($user_status == 1 ){
			  	echo "you need to verify your Account ";
			  	header("Location: ./user_dashboard/examples/verify.php");
			  }else{
			  header("Location: ./user_dashboard/examples/index.php");
			}
			}else{
				exit();
			}

		} 
	}

	}
}	
?>