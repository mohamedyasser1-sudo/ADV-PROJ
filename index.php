<?php
session_start(); 
include 'connect/connect.php';

//include 'form_handlers/login.php';
//include 'form_handlers/login.php';
//symlink('paypal/new/ADV-PROJ/user_dashboard/examples/text.txt', 'target_adv');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>EL Project</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
	
	    <!-- Site Icons 
    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
	-->
	<!-- Bootstrap core CSS -->
     <!--<link href="assets/css/bootstrap.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

 

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <script src="assets/js/modernizr.custom.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Colors CSS -->
    
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="assets/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,900&display=swap" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <link rel="stylesheet" href="assets/css/gl-custom.css">
    <link rel="stylesheet" href="theme/any-theme.css">

</head>
<body class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
			<div id="loader"></div>  
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->

    <!-- LOGO -->
    <div id="logoW">
     <img src="assets/images/logo.png" id="logoId"> 
    </div>
    <!-- END LOGO -->
    
    <!-- Menu -->
	<nav class="menu" id="theMenu">
		<div class="menu-wrap">
			<h1 id="logoHov" class="logo"><a href="index.html#home">LINK</a></h1>
			<i class="fa fa-arrow-right menu-close"></i>
			<a href="index.php">Home</a>
			<a data-value="howwork" href="#">How Work</a>
			<a data-value="about" href="#">About</a> 
			<a data-value="contact" href="#">Contact</a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-dribbble"></i></a>
			<a href="#"><i class="fa fa-envelope"></i></a>
		</div>
		
		<!-- Menu button -->
		<div class="test"><i id="menuToggle" class="fa fa-bars"></i>
		 <span>
             
<?php if(isset($_SESSION['email'])): ?>
  <a href="./form_handlers/logout.php" class="styhome">Logout</a>
<?php else: ?>
  <a href="login.php" class="styhome">Login</a>
<?php endif; ?>         
            
            </span>
		</div>
	</nav>

    

    
    
	<div id="main-banner" class="banner-one" data-scroll-index="0">
		<div data-src="assets/uploads/slide-6.jpg">
			<div class="camera_caption">
				<div class="container">
				                <?php if(isset($_SESSION['email'])): ?>
                    <h1 data-scroll class="fadeInUp animated">Welcome </h1>
 
<?php else: ?>
    
    
                    <h1 data-scroll class="fadeInUp animated">Register as </h1>
					<p class="wow fadeInUp animated" data-wow-delay="0.2s"></p>
					<a data-scroll href="host_regis.php" class="btn btn-light btn-radius btn-brd grd1 cus-btn">HOST</a>
                    <a data-scroll href="advis_regis.php" class="btn btn-light btn-radius btn-brd grd1 cus-btn">ADVERTISE </a>
<?php endif; ?> 
				</div> <!-- /.container -->
			</div> <!-- /.camera_caption -->
		</div>
		<div data-src="assets/uploads/slide-6.jpg">
			<div class="camera_caption">
				<div class="container">
					<h1 class="wow fadeInUp animated">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h1>
					<p class="wow fadeInUp animated" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget.</p>
					<a data-scroll href="signup.php" class="btn btn-light btn-radius btn-brd grd1">REGISTER</a>
				</div> <!-- /.container -->
			</div> <!-- /.camera_caption -->
		</div>
		<div data-src="assets/uploads/slide-6.jpg">
			<div class="camera_caption">
				<div class="container">
					<h1 class="wow fadeInUp animated">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</h1>
					<p class="wow fadeInUp animated" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget.</p>
					<a data-scroll href="signup.php" class="btn btn-light btn-radius btn-brd grd1 ">REGISTER</a>
				</div> <!-- /.container -->
			</div> <!-- /.camera_caption -->
		</div>
	</div> <!-- /#theme-main-banner -->
	

    <div id="about" data-scroll-index="1" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">
                        <h4>Who We are</h4>
                        <h2>Welcome to  Project</h2>
                        <blockquote class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</blockquote>

                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vitae rutrum neque. Ut id erat sit amet libero bibendum aliquam. Donec ac egestas libero, eu bibendum risus. Phasellus et congue justo. </p>

                        <a href="#services" data-scroll class="btn btn-light btn-radius btn-brd grd1">Learn More</a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="post-media wow fadeIn">
                        <img src="assets/uploads/about_05.jpg" alt="" class="img-responsive img-rounded">
                        <a href="http://www.youtube.com/watch?v=nrJtHemSPW4" data-rel="prettyPhoto[gal]" class="playbutton"><i class="flaticon-play-button"></i></a>
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->

            <!--<hr class="hr1"> -->
			<br />

            <div class="row text-center">
                <div class="col-md-6 col-sm-6 col-xs-12">
                   <div class="service-widget">
                        <div class="post-media_pp wow fadeIn">
                            <a href="assets/uploads/politic_07.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="assets/uploads/politic_07.jpg" alt="" class="img-responsive">
							<div class="hover-up">
								<h3>Let's work for a better future</h3>
								<p>Aliquam sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est, 
								convallis nec purus vitae, iaculis posuere sapien. Cum sociis natoque.</p>
							</div>
                        </div>
                        
                    </div><!-- end service -->
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="service-widget">
                        <div class="post-media_pp wow fadeIn">
                            <a href="assets/uploads/politic_07.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="assets/uploads/politic_07.jpg" alt="" class="img-responsive">
							<div class="hover-up">
								<h3>Parliament building was renovated</h3>
								<p>Duis at tellus at dui tincidunt scelerisque nec sed felis. Suspendisse id dolor sed leo 
								rutrum euismod. Nullam vestibulum fermentum erat. It nam auctor. </p>
							</div>
                        </div>
                        
                    </div><!-- end service -->
                </div>

      
				
		
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

<div id="howwork">
    <div id="event" data-scroll-index="2" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>How It Work</h3>
                <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.<br> Sed a tellus quis mi rhoncus dignissim.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-4">
                    <div class="participate-wrap">
                        <small>Proccess 1</small>
						<figure>
							<img src="assets/uploads/politic_08.jpg" alt="" class="img-responsive">
							<figcaption><a href="assets/uploads/politic_08.jpg" data-rel="prettyPhoto[gal]" class="global-radius"><i class="flaticon-unlink"></i></a></figcaption>
							
						</figure>
						<div class="event_dit">
							<h4>Integer sollicitudin metus</h4>						
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
							<a href="event-detail.html" class="btn btn-light btn-radius btn-brd grd1">Detail</a>
						</div>
                    </div><!-- end participate -->
                </div><!-- end col -->

                <div class="col-md-4">
                    <div class="participate-wrap">
                        <small>Proccess 2</small>
						<figure>
							<img src="assets/uploads/politic_08.jpg" alt="" class="img-responsive">
							<figcaption><a href="assets/uploads/politic_08.jpg" data-rel="prettyPhoto[gal]" class="global-radius"> <i class="flaticon-unlink"></i> </a></figcaption>
						</figure>
						<div class="event_dit">
							<h4>Integer facilisis elit</h4>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
							<a href="event-detail.html" class="btn btn-light btn-radius btn-brd grd1">Detail</a>
						</div>
                    </div><!-- end participate -->
                </div><!-- end col -->

                <div class="col-md-4">
                    <div class="participate-wrap">
                        <small>Proccess 3</small>
                        <figure>
							<img src="assets/uploads/politic_08.jpg" alt="" class="img-responsive">
							<figcaption><a href="assets/uploads/politic_08.jpg" data-rel="prettyPhoto[gal]" class="global-radius"> <i class="flaticon-unlink"></i> </a></figcaption>
						</figure>
                        <div class="event_dit">
							<h4>Maecenas bibendum tellus</h4>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
							<a href="event-detail.html" class="btn btn-light btn-radius btn-brd grd1">Detail</a>
						</div>
                    </div><!-- end participate -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
</div>
	



	<div id="blog" data-scroll-index="3" class="section wb">
		<div class="container">
			<div class="section-title text-center">
				<!--<span>Latest news</span>-->
                <h3>Offers</h3>
                <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.<br> Sed a tellus quis mi rhoncus dignissim.</p>
            </div><!-- end title -->
			
			<div class="row">
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="assets/uploads/politic_09.jpg" class="img-responsive" alt="post-img" />
							<div class="date">
								<span>06</span>
								<span>Aug</span>
							</div>
						</div>
						<div class="post-info">
							<h4>Maecenas bibendum tellus</h4>
							<ul>
                                <li>by admin</li>
                                <li>Apr 21, 2018</li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="assets/uploads/politic_09.jpg" class="img-responsive" alt="post-img" />
							<div class="date">
								<span>06</span>
								<span>Aug</span>
							</div>
						</div>
						<div class="post-info">
							<h4>Maecenas bibendum tellus</h4>
							<ul>
                                <li>by admin</li>
                                <li>Apr 21, 2018</li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-lg-4">
					<div class="post-box">
						<div class="post-thumb">
							<img src="assets/uploads/politic_09.jpg" class="img-responsive" alt="post-img" />
							<div class="date">
								<span>06</span>
								<span>Aug</span>
							</div>
						</div>
						<div class="post-info">
							<h4>Maecenas bibendum tellus</h4>
							<ul>
                                <li>by admin</li>
                                <li>Apr 21, 2018</li>
                                <li><a href="#"><b> Comments</b></a></li>
                            </ul>
							<p>Etiam materials ut mollis tellus, vel posuere nulla. Etiam sit amet massa sodales aliquam at eget quam. Integer ultricies et magna quis.</p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
 <div id="contact">
    <div id="donate" data-scroll-index="7" class="section db">
        <div class="container">
            <div class="section-title text-center">
                <h3>Contact</h3>
                <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.<br> Sed a tellus quis mi rhoncus dignissim.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" action="contact.php" name="contactform" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                                </div>
                               

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Why you are donate us?"></textarea>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Send Message</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
 </div>

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-links">
                        <a href="#">Home</a>
                        <a href="#">Blog</a>
                        <a href="#">Pricing</a>
                        <a href="#">About</a>
                        <a href="#">Faq</a>
                        <a href="#">Contact</a>
                    </p>
                    <p class="footer-company-name">All Rights Reserved. &copy; 2019 <a href="#">El Project</a> Developed By : 
					<a href="https://html.design/">Team</a></p>
                </div>

             
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>


  <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/main.js"></script>
	
    <!-- ALL JS FILES -->
    <script src="assets/js/all.js"></script>
	<!-- Camera Slider -->
	<script src="assets/js/jquery.mobile.customized.min.js"></script>
	<script src="assets/js/jquery.easing.1.3.js"></script> 
	<script src="assets/js/camera.min.js"></script>
	<script src="assets/js/scrollIt.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/jquery.vide.js"></script>

</body>
</html>