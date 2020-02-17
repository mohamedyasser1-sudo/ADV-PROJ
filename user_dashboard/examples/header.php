<?php
//session_start();
include '../../form_handlers/redirect.php'; 
include '../../connect/connect.php';
include '../../classes/User.php';
include '../../form_handlers/updateprofile.php';
$user = $_SESSION['email'];
$advertise = new User ($conn,$user);
$user_id = $advertise->getUserId();
$row = $advertise->getUserPendingAdsnum($conn,$user_id);
$userType = $advertise->getUserType($conn,$user_id);
$userdata = $advertise->getUserPendingAdsdata($conn,$user_id);
$pagetype = $advertise->getPageTypes($conn);
$clickcounts = $advertise->getClickCounts($conn);
$adsdurations = $advertise->getAdsDuration($conn);
$categories = $advertise->getPageCategories($conn);
$singleuseradds =$advertise->getHostAdds($conn,$user_id);
$singleuseraddsnum = $advertise->getHostAddsnum($conn,$user_id);
$userprofiledata= $advertise->getUserProfileData($conn,$user_id);
$fname = $advertise->getFullName($conn,$user_id);




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
       <link href="../assets/css/custom.css" rel="stylesheet" />
       <link href="../assets/css/custom-bootstrap.css" rel="stylesheet" />
     
    <link href="../assets/css/select2.min.css" rel="stylesheet" />
    <link href="../assets/css/postAd.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
      
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="index.php" class="simple-text logo-normal">
          Logo
        </a>
      </div>
        
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="./index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./user.php">
              <i class="material-icons">person</i>
              <p>User Profile</p>
                 
            </a>
          </li>
        <?php 
            
            if(($userType[0] == 1))
            {
                echo ' <li class="nav-item ">
            <a class="nav-link" href="./adsRequests.php">
              <i class="material-icons">content_paste</i>
              <p>Ads Requests</p>
                <span class="notify-no">'.$singleuseraddsnum.'</span>
            </a>
          </li>';
                        echo ' <li class="nav-item ">
            <a class="nav-link" href="./acceptedsAds.php">
              <i class="material-icons">content_paste</i>
              <p> Accepted Ads</p>
                <!--<span class="notify-no">55</span>-->
            </a>
          </li>';
                
            }
            elseif (($userType[0] == 2)) {
                echo '<li class="nav-item ">
            <a class="nav-link" href="./postAd.php">
              <i class="material-icons">content_paste</i>
              <p>Post Ad</p>
                <!--<span class="notify-no">55</span>-->
            </a>
          </li>';
                ?>
                <?php
          echo '<li class="nav-item ">
            <a class="nav-link" href="./pendingAds.php">
              <i class="material-icons">bubble_chart</i>
                
              <p>Pending Ads</p>';
              ?>
                <?php 
                if(!($row == 0))
                {
               echo '<span class="notify-no">'. $row .'</span>' ;
                }
                ?>
        <?php        
           echo '</a> </li>';
        ?>
            <?php
            }
            ?>
                    
            
         
          <li class="nav-item">
            <a class="nav-link" href="./currentAds.php">
              <i class="material-icons">library_books</i>
              <p>Current Ads</p>
               <!-- <span class="notify-no">55</span>-->
            </a>
          </li>
            
                   <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">location_ons</i>
              <p>Ad History</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">notifications</i>
              <p>Statistics</p>
            </a>
          </li>
		            <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">notifications</i>
              <p>Setting</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
	
	
     <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
           
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="./index.php">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="user.php"><?php echo $fname;?></a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../../form_handlers/logout.php">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
	  
        
   
     
    

  