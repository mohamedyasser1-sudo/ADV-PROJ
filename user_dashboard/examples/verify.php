<?php
include '../../form_handlers/redirect.php'; 
include '../../connect/connect.php';
include '../../classes/User.php';
include '../../form_handlers/updateprofile.php';
$user = $_SESSION['email'];
$advertise = new User ($conn,$user);
$user_id = $advertise->getUserId();
$status = $advertise->getUserStatus($conn,$user);
$hostPage= $advertise->checkHostPage($conn,$user_id);
$userType = $advertise->getUserType($conn,$user_id);
switch ($userType) {
  case '1':
      if($status == 0 ){
          header ("Location:block.php?id=$user_id");
      }elseif($hostPage == 0 & $status == 1){
          header ("Location: registerHostPage.php?id=$user_id");
      }     
      elseif($hostPage == 1 & $status == 2 ){
          header ("Location:index.php");
      }
    break;

  case '2':
      if($status == 0 ){
          header ("Location:block.php?id=$user_id");
      }elseif ($status == 2 ) {
          header ("Location: index.php");
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
$singleuseradds =$advertise->getHostAdds($conn,$user_id);
$singleuseraddsnum = $advertise->getHostAddsnum($conn,$user_id);
$userprofiledata= $advertise->getUserProfileData($conn,$user_id);
$fname = $advertise->getFullName($conn,$user_id);
$message= "";
switch ($userType) {
  case '1':
if(isset($_POST['verify'])){
    $code = $_POST['code'];
    $query = mysqli_query($conn, "SELECT * FROM hostpages WHERE user_id = '$user_id' AND status = 1");
    $pageData = mysqli_fetch_array($query);
    $activation_code = $pageData['verification'];
    $status = $pageData['status'];

    if($code == $activation_code){
      $updatePageStatus= mysqli_query($conn,"UPDATE hostpages SET status = 0 WHERE user_id = '$user_id'");
      $updateUserStatus= mysqli_query($conn,"UPDATE users SET active = 2 WHERE id='$user_id'");
      header("Location:index.php");
    }else{
      $message = "invalid verification code!, Try Again";

    }

}
if(isset($_POST['resend'])){
  $query = mysqli_query($conn,"UPDATE hostpages SET status = 0 WHERE user_id = '$user_id'");
  if($query){
    $message = " Request Sent to Admin, Please Wait while you recieve another code"; 
  }else{
    $message = " Sorry, but you can't have another code, Please contact admin directly on :  support@topad.net";
  }
}
break;
    case '2':
    if(isset($_POST['verify'])){
    $code = $_POST['code'];
    $query = mysqli_query($conn, "SELECT * FROM users WHERE id = '$user_id' AND active = 1");
    while($userData = mysqli_fetch_array($query)){
    $activation_code = $userData['code'];
    if($code == $activation_code){
      $updateUserStatus= mysqli_query($conn,"UPDATE users SET active = 2 WHERE id='$user_id'");
      header("Location:index.php");
    }else{
      $message = "invalid verification code";
    }
}
}
if(isset($_POST['resend'])){
  $token        = bin2hex(random_bytes(3));
  $query = mysqli_query($conn,"UPDATE users SET code = '$token' WHERE id = '$user_id'");
  if($query){
    send_Verification_Code($user,$token);
    $message = " Request Sent to Admin, Please Wait while you recieve another code"; 
  }else{
    $message = " Sorry, but you can't have another code, Please contact admin directly on :  support@topad.net";
  }
}
break;
  default:
    break;
        
}
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
    <link href="../assets/theme/user-theme.css" rel="stylesheet" />
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
          <img src="../assets/img/topAdLogo.png" alt="TopAd">
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
                <!-- <span class="notify-no">'.$singleuseraddsnum.'</span> -->
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
               echo '<span class="notify-no"></span>' ;
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

            <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Verify Your Account</h4>
                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                      <span>To verify your page you need to enter the verification code that was sent to 
                        <?= ($userType == 1) ? 'your Page' :' your email' ?> </span>
 
                    <br><br>
                  <div class="col-md-4">
                    <div class="form-group">
                      <form method="post" action="#">
                        <label class="bmd-label-floating">Verification Code</label>
                       <input type="text" name="code" class="form-control"  placeholder="">
                       <div class="form_groub">
                       <button class="btn btn-primary pull-left" name="verify">Verify</button>
                       <button class="btn btn-primary pull-right" name="resend">resend code</button>
                       </div>
                       
                     <div class="clearfix"></div>
                   </form>
                   <div class="form-group"><span><?= $message; ?></span></div>
                    </div>
                  </div>                   
                  </div>
                </div>
              </div>
            </div>
              
         
            </div>
        </div>
      </div>
          
        <?php 
  include 'footer.php'; 
  
?>
<?php 
function send_Verification_Code($user_email,$token){
            $to = $user_email;
            $subject = "Verification Code";
            $url="http://topad.net/preview/user_dashboard/examples/verify.php";
            $message = "<p>you have requested to activate your membership, you will find a link below, if that was not you please ignore this email, if this is true please use this code to verify your email :" . $token. "</p>";
            $message .="click this link :  ";
            $message .='<a href="'.$url.'">Verify your account</a></p>';
            $headers  = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "Reply-To: Top AD <support@topad.net>"."\r\n";
            $headers .= "From: top AD  <support@topad.net>"."\r\n";

           
            if(mail($to,$subject, $message,$headers))
            {
                //header("Location:singggt.php");
                 echo "Done";

            }
            else
            {
              echo'<div class="toast-item toast-type-error"><div class="toast-item-image toast-item-image-error"></div><div class="toast-item-close"></div><p>جدث خطأ يرجى المحاولة لاحقا. </p></div>';
             
            }
            
           
            }

?>