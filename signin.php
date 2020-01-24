<?php 
include 'connect/connect.php';
include 'form_handlers/register.php';
include 'form_handlers/login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Modern Flip Sign In Form Flat Responsive Widget Template :: w3layouts</title>
<!-- Custom Theme files -->
<link href="assets/css/regis-login.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->

<!-- //web font -->
<!-- jS --> 
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/script.js"></script> 
<!-- //js -->


    <!-- Meta tags -->
    <!-- font-awesome icons -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!--stylesheets-->
  
    <!--//style sheet end here-->
	
	 <!-- Bootstrap core CSS -->
     <!--<link href="assets/css/bootstrap.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,900&display=swap" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <script src="assets/js/modernizr.custom.js"></script>
</head>
<body>


<!-- Menu -->
	<nav class="menu" id="theMenu">
		<div class="menu-wrap">
			<h1 class="logo"><a href="index.php#home">LINK</a></h1>
			<i class="fa fa-arrow-right menu-close"></i>
		    <a href="index.php">Home</a>
			<a href="index.php#howwork">How Work</a>
			<a href="index.php#about">About</a>
			<a href="index.php#contact">Contact</a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-dribbble"></i></a>
			<a href="#"><i class="fa fa-envelope"></i></a>
		</div>
		
		<!-- Menu button -->
		<div class="test"><i id="menuToggle" class="fa fa-bars"></i>
		<span>
            
            
            
            <?php if(isset($_SESSION['email'])): ?>
  <a href="logout.php" class="stysignup">Logout</a>
<?php else: ?>
 <!-- <a href="login.php" class="stysignup">Login</a>-->
<?php endif; ?> 
            
            
            </span>
		</div>
	</nav>
	


	<!-- main -->
	<div class="main-agile">
		
		<div id="w3ls_form" class="signin-form">
			<!-- Sign In Form -->
			<form id="signin" action="#" method="post">
				
				<h2>Sign In Form</h2>
				<p>User Name </p>
				<input type="email" name="email" placeholder="Email" required="" value="<?= (isset ($email)) ? $email :'' ?>"/>
				<p>Password</p>
				<input type="password" name="pass" placeholder="Password" required=""/>	 
				<input type="checkbox" id="brand" value="">
				<label for="brand"><span></span> Remember me ?</label> 
				
                <button type="submit" name="login" class="button">Login </button> 
				<div class="signin-agileits-bottom"> 
					<p><a href="#">Forgot password ?</a></p>    
				</div> 
				<!--
				<div class="social-icons">
					<ul>  
						<li><a href="#"><span class="icons"></span><span class="text">Sign in with Facebook</span></a></li> 
						<li class="twt"><a href="#"><span class="icons"></span><span class="text">Sign in with Twitter</span></a></li>  
					</ul> 
					<div class="clear"> </div>
				</div>	-->
			</form>
			
            
            <div class="w3layouts_more-buttn">
                    <h3>Don't Have an account..?
                        <a href="signup.php">Register Here
                        </a>
                    </h3>
                </div>
            
			 <?php
        echo '<div class="text-center p-t-46 p-b-20"><span class="txt2">'.$message.'</span></div>';
    ?>
	
			<!-- //Sign In Form -->

		</div>

	</div>	
	<!-- //main --> 
	
	 
	      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>