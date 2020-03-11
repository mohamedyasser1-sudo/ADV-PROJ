<?php
//session_start();
include '../../form_handlers/redirect.php';
include '../../connect/connect.php';
include '../../classes/User.php';
include 'hostpagehandler.php';
$message = "";
$user = $_SESSION['email'];
$advertise = new User ($conn,$user);
$user_id = $advertise->getUserId();
$status = $advertise->getUserStatus($conn,$user);
$userType = $advertise->getUserType($conn,$user_id);
$hostPage= $advertise->checkHostPage($conn,$user_id);
switch ($userType) {
  case '1':
      if($status == 0){
          header ("Location:block.php?id=$user_id");      
      }else{
      if($status ==1  & $hostPage ==1  ){ 
          header ("Location:verify.php?id=$user_id");
      }elseif($hostPage ==1 & $status == 2 ){
          header ("Location:index.php");
      }
      }  
    break;

  case '2':
      if($status == 0 ){
          header ("Location:block.php?id=$user_id");
      }elseif($status == 1 ){
          header ("Location:verify.php?id=$user_id");
      } 
      break;  

  default:
    break;
}
$row = $advertise->getUserPendingAdsnum($conn,$user_id);
$userdata = $advertise->getUserPendingAdsdata($conn,$user_id);
$pagetype = $advertise->getPageTypes($conn);
$clickcounts = $advertise->getClickCounts($conn);
$adsdurations = $advertise->getAdsDuration($conn);
$categories = $advertise->getPageCategories($conn);
$followers = $advertise->getHostPageFollowersCategory($conn);
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
    <link href="../assets/css/postAd2.css" rel="stylesheet" />
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
            if ($singleuseraddsnum == 0 ){
            echo ' <li class="nav-item ">
              <a class="nav-link" href="./adsRequests.php">
                <i class="material-icons">content_paste</i>
                <p>Ads Requests</p>
                
              </a>
            </li>';
            }else {
            echo ' <li class="nav-item ">
              <a class="nav-link" href="./adsRequests.php">
                <i class="material-icons">content_paste</i>
                <p>Ads Requests</p>
                <span class="notify-no">'.$singleuseraddsnum.'</span>
              </a>
            </li>';
            }
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
          <div class="content">
            <div class="container-fluid">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Posting Ad Process</h4>
                  <p class="card-category">Here you will post you Ad for you [Page category] page</p>
                </div>
                <br>
                <div class="card-body">
                  <form action="#"  method="post" enctype="multipart/form-data">
                    <div class="">
                      <div class="col-md-2 ">
                        <div class="form-group">
                          <h5 class="card-title">your page information</h5>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <div id="show">
                        <div class="row">
                          <div class="col-md-2">
                            <div class="form-group">
                              <label class="bmd-label-floating pname">Page Name</label>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <input type="text" name="pagename" id="pageName" class="form-control" placeholder="Write your page name">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-2">
                            <div class="form-group ">
                              <label class="bmd-label-floating purl">Page URL</label>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <input type="text" name="pageurl" id="pageURL" class="form-control" placeholder="Enter your page URL">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-2">
                            <div class="form-group ">
                              <label class="bmd-label-floating pdesc">Page Description</label>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <input type="text" name="pagedesc" id="pageDesc" class="form-control" placeholder="What is your page description">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-2">
                            <div class="form-group ">
                              <label class="bmd-label-floating pdesc">Page Category</label>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <?php echo $message; ?>
                            <select class="form-control" name="category" onchange="changeNamesHandler(event);">
                              <option value="">Selece a value</option>
                              <?php foreach($categories as $category){  ?>
                              <option value='<?= $category['LOOKUP_VALUE']; ?>'><?= $category['LOOKUP_LABEL']; ?>  </option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-2">
                            <div class="form-group ">
                              <label class="bmd-label-floating pdesc">Number of Followers</label>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <?php echo $message; ?>
                            <select class="form-control" name="followersCat" onchange="changeNamesHandler(event);">
                              <option value="">Selece a value</option>
                              <?php foreach($followers as $follower){  ?>
                              <option value='<?= $follower['LOOKUP_VALUE']; ?>'><?= $follower['LOOKUP_LABEL']; ?>  </option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>
                          <div class="form-row text-center">
                            <div class="col-12">
                              <button type="submit" name="submitbtn" id="itcost" class="btn btn-primary btn-lg-cus" >
                              <span>Click to Save </span>
                              </button>
                            </div>
                          </div>
                          <?= $message; ?>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                
                <?php
                include 'footer.php';
                
                ?>