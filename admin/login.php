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
<link href="login2/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--webfonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>

<!--/start-login-one-->
<h1>Login</h1>
		<div class="login">	
			<div class="ribbon-wrapper h2 ribbon-red">
				<div class="ribbon-front">
					<h2>Admin Login</h2>
				</div>
				<div class="ribbon-edge-topleft2"></div>
				<div class="ribbon-edge-bottomleft"></div>
			</div>
			<form method="post" action="#">
				<ul>
					<li>
						<input type="text" class="text" value="Email Address" name="username" id="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" required=""><a href="#" class=" icon user"></a>
					</li>
					 <li>
						<input type="password" value="Password"  name="password" id="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"><a href="#" class=" icon lock"></a>
					</li>
				</ul>
<span class="msgError"><?php echo $message; ?></span>
			
			<div class="submit">
				<input type="submit"value="Log in" name="login">
			</div>
			</form>
		</div>
<!--start-copyright-->
   		<div class="copy-right">
				<p>Copyright &copy; 2020 All rights  Reserved | Developed by &nbsp;<a href="http://ehabelshamy.rf.gd/?i=1">Ehab El-shamy</a> and <a href="mailto:mohamedyasser71230@gmail.com">Mohamed Yasser</a></p>
		</div>
	<!--//end-copyright-->
</body>
</html>