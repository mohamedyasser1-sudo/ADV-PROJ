<?php 
session_start();
include 'connect/connect.php';
$message ="";
if(isset($_SESSION['email'])){
   //header("Location: /index.php"); 
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
		// $checkuser=mysqli_query($conn,"SELECT * FROM `users` WHERE BINARY `email` = BINARY '$email' AND BINARY `password` = BINARY '$pass'");
		// if(mysqli_num_rows($checkuser) != 1 ){
		// 	$message = "your information is not correct please write the correct information or <a href='signup.php'>Sign Up</a>";
		else{
			  // $_SESSION['email'] = true;
			  $_SESSION['email'] = $email;
			  header("Location: ./user_dashboard/examples/dashboard.php");

		} 
	}

	}
}	
?>