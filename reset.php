<?php 
    
    if (!isset($_GET['validator'])) {
        header("Location:index.php");
    }   
    include "connect/connect.php";
        $message   = " ";
    if(isset($_POST['reset'])){
        $email     =$_GET['email'];
        $code      =$_POST['code'];
        $password  =$_POST['password'];
        $repassword=$_POST['repassword'];


        $query="SELECT * FROM passreset WHERE BINARY resetuser= BINARY '$email' AND BINARY token = BINARY '$code'";
        $res=mysqli_query($conn,$query);
        if ($res) 
            {
              
        if(mysqli_num_rows($res)==1)
            {    
            // $row = mysqli_fetch_assoc($res);
            // $userid=$row['userid'];
            // $email = $row['resetuser'];
        if($password !== $repassword){
            $message= " your new passwords are not matched ";
        }else {    

        $updatequery="UPDATE users SET password ='$password' WHERE email = '$email'";
        $updateres=mysqli_query($conn,$updatequery);
        if($updateres){
            $message= " you have successfully reset your password";
        }

        }



    }else{
        $message="your code does not match the code sent to your email, please check again";
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reset Password</title>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Allied Login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <script>
        addEventListener("load", function () { setTimeout(hideURLbar, 0); }, false); function hideURLbar() { window.scrollTo(0, 1); }
    </script>
    <!-- Meta tags -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!--stylesheets-->
    <link href="assets/css/login.css" rel='stylesheet' type='text/css' media="all">
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
    <link rel="stylesheet" href="theme/any-theme.css">
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/loadingOverlayScript.js"></script>
    <script src="assets/js/loadingoverlay.min.js"></script>
     

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
		<!--<span><a href="login_signup.html">Login</a></span>-->
		</div>
	</nav>
	
    <div class="w3layouts-two-grids">
        <div class="mid-class">
            <div class="txt-left-side" id="txt-left-side">
                <h2> Reset your Password </h2>
                <p>To reset your password please enter the code that you have received through mail and enter your new password </p>
                <form action="" method="post">
                    <div class="form-left-to-w3l">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                        <input type="text" name="code" placeholder="code" required="" value="">
                        <div class="clear"></div>
                    </div>

                    <div class="form-left-to-w3l">
                        <span class="fa fa-lock" aria-hidden="true"></span>
                        
                        <input type="password" name="password" placeholder="password" required="" value="">

                        <div class="clear"></div>
                    </div>

                    <div class="form-left-to-w3l">
                        <span class="fa fa-lock" aria-hidden="true"></span>
                        
                        <input type="password" name="repassword" placeholder="confirm password" required="" value="">

                        <div class="clear"></div>
                    </div>

                                            


                    <div class="btnn">
                         <button type="submit" name="reset" class="button">Reset </button> 
                    </div>
                        <?php
        echo '<div class="text-center p-t-46 p-b-20"><span class="txt2">'.$message.'</span></div>';
    ?>
                </form>


            </div>
            <div class="img-right-side" id="img-right-side">
                <h3>Welcome To Project Login Form</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget</p>
                <img src="assets/images/logo.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
	
	        <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="assets/js/main.js"></script>
</body>

</html>