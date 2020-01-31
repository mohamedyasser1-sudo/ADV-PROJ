<?php 
include '../connect/connect.php';
session_start();
$message ="";
if(isset($_SESSION['admin'])){
   header("Location: /index.php"); 
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
        	  $_SESSION['admin'] = $username;
			  $admin = $_SESSION['admin'];
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
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="assets/css/ready.css">
	<link rel="stylesheet" href="assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
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