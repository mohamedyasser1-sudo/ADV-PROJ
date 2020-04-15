<?php 
session_start();
if(!isset($_SESSION['registered'])){
   header("Location: ./index.php"); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
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

     

</head>

<body>

	
    <div class="w3layouts-two-grids">
        <div class="mid-class">
            <div class="txt-left-side" id="txt-left-side">
                <h2> Confirmation </h2>
                <p>You have successfully registered</p>
               
                <div class="w3layouts_more-buttn">
                    <h3>Please click  
                        <a href="login.php">here
                        </a>
                        to login
                    </h3>
                </div>

            </div>
            
        </div>
    </div>
	
	        <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="assets/js/main.js"></script>
</body>

</html>