<?php 
include 'connect/connect.php';
$showmessage = "";

if (isset($_POST['send'])) {
    
        $selector = bin2hex(random_bytes(8));
        $token    = random_bytes(6);
        $expires  = date("U") + 1800;

  $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

  $query = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
  if(mysqli_num_rows($query) != 1){
    $showmessage = "This email doesn't look like to be a current user";
  }else{
$sql = mysqli_query($conn,"DELETE FROM passreset WHERE resetuser='$email'");
$hashed_token = password_hash($token,PASSWORD_DEFAULT);
$insertsql = mysqli_query($conn,"INSERT INTO `passreset`(`resetuser`, `resetselector`, `token`, `expires`) VALUES ('$email','$selector','$token','$expires')");
$url="http://http://topad.net/test/ADV-PROJ/reset.php?selector= ".$selector."&email=".$email."&validator=" .bin2hex($token);

 $to = $email;
 $subject= "Reset Your Password";
 $message="<p> you have requested to reset your password, you will find a link below, if that was not you please ignore this email; </p>";
 $message.="<p> here is a link to reset your password :</br>";
 $message.='<a href="'.$url.'">Reset Your Password</a></p>';
$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "Reply-To: TopAD <support@topad.net>"."\r\n";
$headers .= "From: TopAD  <support@topad.net>"."\r\n";
    
if(mail($to,$subject, $message,$headers))
{
     echo "Done";

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
    <!--<script src="assets/js/loadingOverlayScript.js"></script>
    <script src="assets/js/loadingoverlay.min.js"></script>-->
     
<style type="text/css">
    
    #email::-webkit-input-placeholder {  color: #98c913;  font-family: cursive;  }
#email:-moz-placeholder { color: #98c913; font-family: cursive; }
#email::-moz-placeholder { color: #98c913; font-family: cursive; }
#email::-ms-input-placeholder { color: #98c913; font-family: cursive; }


</style>
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
                <h2> Forgot Your Password </h2>
                <p>when you write your address below, you will recieve an email with how to reset your password </p>
                <form action="" method="post" id="forgetpasswordform">
                    <div class="form-left-to-w3l">
                        <span class="fa fa-envelope-o" aria-hidden="true"></span>
                        <input type="email" name="email" placeholder="Email" id="email" required="" value="<?= (isset ($email)) ? $email :'' ?>">

                        <div class="clear"></div>
                    </div>


                    <div class="btnn">
                         <button type="submit" name="send" class="button">Send Mail </button> 
                      <!--  <input type="submit" name="login" value="Sign Up" placeholder="Sign Up" class="button">-->
                    </div>
                        <?php
        echo '<div class="text-center p-t-46 p-b-20"><span class="txt2">'.$showmessage.'</span></div>';
    ?>
                </form>
                <div class="w3layouts_more-buttn">
                    <h3>Don't Have an account..?
                        <a href="index.php#home">Register Here
                        </a>
                    </h3>
                </div>

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
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="assets/js/register.js"></script>s
    <script src="assets/js/main.js"></script>
</body>

</html>