<?php 
include '../connect/connect.php';
session_start();
$message ="";
if(isset($_SESSION['username'])){
   header("Location: index.php"); 
}else{
	if (isset($_POST['login'])){	
		$username     =$_POST['username'];
		$pass         =$_POST['password'];

		$checkuser = "SELECT * FROM admin WHERE username = ? ";
		$stmt =mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$checkuser)){
            exit();
        }else{
		mysqli_stmt_bind_param($stmt,"s",$username);
		mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        $stmt->execute();
		$result = $stmt->get_result();
		if($result->num_rows !== 1){
		// $result = mysqli_query($conn,$checkuser);
		// if(mysqli_num_rows($result) == 1 ){
			$message= " wrong credintial";
		}else{
			while($row = $result->fetch_assoc()){
 	       if(password_verify($pass, $row['password'])){
        	  $_SESSION['username'] = $username;
			   $admin = $_SESSION['username'];
			  header("Location: index.php");
 	       	$message =  "yes";
        }else{
        	$message = " Wrong Credintials";
        }
		} 
	}

	}
}
}
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- //for-mobile-apps -->
<link href="login/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- main -->
		<div class="main">
			<h1>Admin Login</h1>
			<div class="input_form">
				<form method="post" action="#">
					<input type="text" name="username" id="username" value="User Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}" required="">
					<input type="password"  name="password" id="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
				
			</div>
			<div class="ckeck-bg">
				<div class="checkbox-form">
					<div class="check-left">
						<div class="check">
							<label class="checkbox"><?php echo $message; ?></label>
						</div>
					</div>
					<div class="check-right">
						<form>
							<input type="submit" value="Login" name="login">
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			</form>
		</div>
		<div class="footer">
			<p>&copy 2020. All rights reserved | Developed by <a href="http://ehabelshamy.rf.gd/?i=1">Ehab El-shamy</a> and <a href="mailto:mohamedyasser71230@gmail.com">Mohamed Yasser</a></p>
		</div>
	<!-- //main -->
</body>
</html>