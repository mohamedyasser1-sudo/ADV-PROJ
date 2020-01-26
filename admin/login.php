<?php 
session_start();
include '../connect/connect.php';
$message ="";
if(isset($_SESSION['username'])){
   //header("Location: /index.php"); 
}else{
	if (isset($_POST['login'])){	
		$username     =$_POST['username'];
		$pass         =$_POST['password'];
		$checkuser="SELECT * FROM admin WHERE username = ? AND password = ?";
		$stmt =mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$checkuser)){
            exit();
        }else{
		mysqli_stmt_bind_param($stmt,"ss",$username,$pass);
		mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
		if(mysqli_stmt_num_rows($stmt) != 1 ){
			$message = "Wrong credentials";
		}
		// $checkuser=mysqli_query($conn,"SELECT * FROM `users` WHERE BINARY `email` = BINARY '$email' AND BINARY `password` = BINARY '$pass'");
		// if(mysqli_num_rows($checkuser) != 1 ){
		// 	$message = "your information is not correct please write the correct information or <a href='signup.php'>Sign Up</a>";
		else{
			  // $_SESSION['email'] = true;
			  $_SESSION['username'] = $username;
			  header("Location: index.php");

		} 
	}

	}
}	
?>

<?php
	include 'header.php'; 
?>
	<div class="col-md-9">
		<div class="card">
			<div class="card-header">
				<div class="card-title">Login Form</div>
			</div>
			<form method="post" action="#">
			<div class="card-body">
				<div class="form-group">
					<label for="username">username</label>
					<input type="username" class="form-control" name="username" id="username" placeholder="username">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" id="password" placeholder="Password">
				</div>
				<div class="card-action">
					<button type="submit" name="login" class="btn btn-success">Login</button>
				</div>
			</div>
			<?php echo $message; ?>
		</form>
		</div>	