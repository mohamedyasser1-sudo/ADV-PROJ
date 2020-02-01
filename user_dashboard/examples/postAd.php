<!--
=========================================================
 Material Dashboard - v2.1.1
=========================================================

 Product Page: https://www.creative-tim.com/product/material-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/material-dashboard/blob/master/LICENSE.md)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
        <link href="../assets/css/custom.css" rel="stylesheet" />
       <link href="../assets/css/custom-bootstrap.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
      
      <div class="sidebar" data-color="purple" data-background-color="green" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Logo
        </a>
      </div>
        
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="./dashboard.php">
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
          <li class="nav-item active">
            <a class="nav-link" href="./typography.php">
              <i class="material-icons">content_paste</i>
              <p>Post Ad</p>
                 <span class="notify-no">55</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./currentAds.php">
              <i class="material-icons">library_books</i>
              <p>Current Ads</p>
                 <span class="notify-no">55</span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./pendingAds.php">
              <i class="material-icons">bubble_chart</i>
              <p>Pending Ads</p>
                 <span class="notify-no">55</span>
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
          
          <!--
       <div class="toast toast-cus" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
  <div class="toast-header">
    <img src="..." class="rounded mr-2" alt="...">
    <strong class="mr-auto">Bootstrap</strong>
    <small class="text-muted">11 mins ago</small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>
          
          -->
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Post Your Ad</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
           
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
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
                  <a class="dropdown-item" href="#">Profile</a>
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
               
               
               <div class="">
                  <form>
                    <div class="row">
                
                      <div class="col-md-2 ">
                        <div class="form-group">
                        
   <h4 class="card-title">Post Your Ad For</h4>             
                            
                        </div>
                      </div>
                        
               <div class="col-md-4">
                       
                        
                         <select id="pageCat" class="form-control" name="form_select" onchange="test(this)">
<option value="hide">-- Select --</option>
<option value="2010">Facebook P age</option>
<option value="2011">YouTube Channel</option>
<option value="2012">Instagram Account</option>
<option value="2013">Website</option>

</select>
                            
                      
                      </div>
                    </div>
        
            
                  
                    <div class="clearfix"></div>
                  </form>
                </div>
               
                <div id="show">
	<form>
        
        
                            <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label class="bmd-label-floating">Page Name</label>
                         
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                        
                          <input type="text" id="pageName" class="form-control" placeholder="Write your page name">
                        </div>
                      </div>
                    
                    </div>
        
        
        
                            <div class="row">
                      <div class="col-md-2">
                        <div class="form-group ">
                          <label class="bmd-label-floating">Page URL</label>
                         
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                        
                          <input type="text" id="pageURL" class="form-control" placeholder="Enter your page URL">
                        </div>
                      </div>
                    
                    </div>
        
        
        
                          
        
        
                        <div class="row">
                      <div class="col-md-2">
                        <div class="form-group ">
                          <label class="bmd-label-floating">Page Description</label>
                         
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                        
                          <input type="text" id="pageDesc" class="form-control" placeholder="What is your page description">
                        </div>
                      </div>
                    
                    </div>
        
        
          <div class="row">
                      <div class="col-md-2">
                        <div class="form-group ">
                          <label class="bmd-label-floating">Description</label>
                         
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                        
                          <input type="text" id="adDesc1" class="form-control" placeholder="What is your page description">
                        </div>
                      </div>
                    
                    </div>
        
        
        
        <!--
                    <div class="row">
                      <div class="col-md-2">
                        
                      </div>
                     
                      <div class="col-md-8">
                       <div class="custom-file-upload">

<input type="file" id="file" name="myfiles[]" multiple />
</div>
                      </div>




  
                      <div class="col-md-8">
                       <form class="form">
<input type="file" class="fileLoad" id="fileLoad-01">

</form>
                      </div>
                    </div>
        -->
        
        
        
           <div class="row">
                      <div class="col-md-2">
                        
                      </div>
                     
                      <div class="col-md-8">
                       <form class="">
<div class="custom-file-upload">

<input type="file" id="pageImg1" name="myfiles[]" multiple class="fileLoad"/>
</div>
</form>
                      </div>
                    </div>
        
        
        
             <div class="row">
                      <div class="col-md-2">
                        <div class="form-group ">
                          <label class="bmd-label-floating">Description</label>
                         
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                        
                          <input type="text" id="adDesc2" class="form-control" placeholder="What is your page description">
                        </div>
                      </div>
                    
                    </div>
        
        
        
        
        
              <div class="row">
                      <div class="col-md-2">
                        
                      </div>
                     
                      <div class="col-md-8">
                       <form class="">
<div class="custom-file-upload">

<input type="file" id="pageImg2" name="myfiles[]" multiple class="fileLoad"/>
</div>
</form>
                      </div>
                    </div>
  
        
        
          <div class="row">
                      <div class="col-md-2">
                        <div class="form-group ">
                          <label class="bmd-label-floating">Description</label>
                         
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                        
                          <input type="text" id="adDesc3" class="form-control" placeholder="What is your page description">
                        </div>
                      </div>
                    
                    </div>
        
           
              <div class="row">
                      <div class="col-md-2">
                        
                      </div>
                     
                      <div class="col-md-8">
                       <form class="">
<div class="custom-file-upload">

<input type="file" id="pageImg3" name="myfiles[]" multiple class="fileLoad"/>
</div>
</form>
                      </div>
                    </div>
        
        
          <div class="row">
                      <div class="col-md-2">
                        <div class="form-group ">
                          <label class="bmd-label-floating">Description</label>
                         
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                        
                          <input type="text" class="form-control" placeholder="What is your page description">
                        </div>
                      </div>
                    
                    </div>
        
        
        
           
              <div class="row">
                      <div class="col-md-2">
                        
                      </div>
                     
                      <div class="col-md-8">
                       <form class="">
<div class="custom-file-upload">

<input type="file" id="file4" name="myfiles[]" multiple class="fileLoad"/>
</div>
</form>
                      </div>
                    </div>
                  
                   
                    <button type="submit" class="btn btn-primary pull-right" id="Proceed" >Proceed</button>
                    <div class="clearfix"></div>
                  </form>
        
                </div>
               
               
               
               
               
                         


<!-- Modal -->
<div class="modal fade" id="modalClick" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Clicks Numbers</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h4 class="text-center">How many clicks you want to get for your Ad?</h4>
    
  <div class="form-row form-row-cus">
    <div class="col-5">
      <input type="text" class="form-control" placeholder="No. of clicks">
    </div>
    <div class="col">
     <span class="form-control">In</span>
    </div>
    <div class="col-5">
      <input type="text" class="form-control" placeholder="Enter days">
    </div>
       <div class="col">
     <span class="form-control">Days</span>
    </div>
  </div>
          <div class="form-row">
    <div class="col-12">
      <input type="text" class="form-control" placeholder="Select Category">
    </div>

    

  </div>
        
        
        <div class="form-row text-center">
    <div class="col-12">
      <button type="submit" id="itcost" class="btn btn-primary btn-lg-cus">
          It cost 10$
          <br>
        <span>Click to applay</span>
        </button>
        
       
    </div>

  

  </div>
        
        

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    
      </div>
    </div>
  </div>
</div>
               
               
               
               
               
               
            
               
                </div>
             
          </div>
        </div>
      </div>
          
          
          

          
          
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="#">
                  Site Name
                </a>
              </li>
              <li>
                <a href="#">
                  About Us
                </a>
              </li>
              <li>
                <a href="#">
                  Blog
                </a>
              </li>
              <li>
                <a href="#">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="#" target="_blank">Team</a> for a better web.
          </div>
        </div>
      </footer>
  
      
      </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
       
        <!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> -->
       
        
        <li class="header-title">Thank you for 95 Ads!</li>
        
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
    <script src="../assets/js/jquery-3.4.1.min.js"></script>
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
    
     <!--<script src="../assets/js/jquery-3.4.1.min.js"></script> -->
    <script src="../assets/js/stopExecutionOnTimeout.js"></script>
    <script >
/*
Reference: http://jsfiddle.net/BB3JK/47/
*/

$('select').each(function () {
  var $this = $(this),numberOfOptions = $(this).children('option').length;

  $this.addClass('select-hidden');
  $this.wrap('<div class="select"></div>');
  $this.after('<div class="select-styled"></div>');

  var $styledSelect = $this.next('div.select-styled');
  $styledSelect.text($this.children('option').eq(0).text());

  var $list = $('<ul />', {
    'class': 'select-options' }).
  insertAfter($styledSelect);

  for (var i = 0; i < numberOfOptions; i++) {if (window.CP.shouldStopExecution(0)) break;
    $('<li />', {
      text: $this.children('option').eq(i).text(),
      rel: $this.children('option').eq(i).val() }).
    appendTo($list);
  }window.CP.exitedLoop(0);

  var $listItems = $list.children('li');

  $styledSelect.click(function (e) {
    e.stopPropagation();
    $('div.select-styled.active').not(this).each(function () {
      $(this).removeClass('active').next('ul.select-options').hide();
    });
    $(this).toggleClass('active').next('ul.select-options').toggle();
  });

  $listItems.click(function (e) {
    e.stopPropagation();
    $styledSelect.text($(this).text()).removeClass('active');
    $this.val($(this).attr('rel'));
    $list.hide();
    //console.log($this.val());
  });

  $(document).click(function () {
    $styledSelect.removeClass('active');
    $list.hide();
  });

});
//# sourceURL=pen.js
    </script>
    
    
    <script>
//Reference: 
//https://www.onextrapixel.com/2012/12/10/how-to-create-a-custom-file-input-with-jquery-css3-and-php/
;(function ($) {

  // Browser supports HTML5 multiple file?
  var multipleSupport = typeof $('<input/>')[0].multiple !== 'undefined',
  isIE = /msie/i.test(navigator.userAgent);

  $.fn.customFile = function () {

    return this.each(function () {

      var $file = $(this).addClass('custom-file-upload-hidden'), // the original file input
      $wrap = $('<div class="file-upload-wrapper">'),
      $input = $('<input type="text" class="file-upload-input" />'),
      // Button that will be used in non-IE browsers
      $button = $('<button type="button" class="file-upload-button">Select a File</button>'),
      // Hack for IE
      $label = $('<label class="file-upload-button" for="' + $file[0].id + '">Select a File</label>');

      // Hide by shifting to the left so we
      // can still trigger events
      $file.css({
        position: 'absolute',
        left: '-9999px' });


      $wrap.insertAfter($file).
      append($file, $input, isIE ? $label : $button);

      // Prevent focus
      $file.attr('tabIndex', -1);
      $button.attr('tabIndex', -1);

      $button.click(function () {
        $file.focus().click(); // Open dialog
      });

      $file.change(function () {

        var files = [],fileArr,filename;

        // If multiple is supported then extract
        // all filenames from the file array
        if (multipleSupport) {
          fileArr = $file[0].files;
          for (var i = 0, len = fileArr.length; i < len; i++) {if (window.CP.shouldStopExecution(0)) break;
            files.push(fileArr[i].name);
          }window.CP.exitedLoop(0);
          filename = files.join(', ');

          // If not supported then just take the value
          // and remove the path to just show the filename
        } else {
          filename = $file.val().split('\\').pop();
        }

        $input.val(filename) // Set the value
        .attr('title', filename) // Show filename in title tootlip
        .focus(); // Regain focus

      });

      $input.on({
        blur: function () {$file.trigger('blur');},
        keydown: function (e) {
          if (e.which === 13) {// Enter
            if (!isIE) {$file.trigger('click');}
          } else if (e.which === 8 || e.which === 46) {// Backspace & Del
            // On some browsers the value is read-only
            // with this trick we remove the old input and add
            // a clean clone with all the original events attached
            $file.replaceWith($file = $file.clone(true));
            $file.trigger('change');
            $input.val('');
          } else if (e.which === 9) {// TAB
            return;
          } else {// All other keys
            return false;
          }
        } });


    });

  };

  // Old browser fallback
  if (!multipleSupport) {
    $(document).on('change', 'input.customfile', function () {

      var $this = $(this),
      // Create a unique ID so we
      // can attach the label to the input
      uniqId = 'customfile_' + new Date().getTime(),
      $wrap = $this.parent(),

      // Filter empty input
      $inputs = $wrap.siblings().find('.file-upload-input').
      filter(function () {return !this.value;}),

      $file = $('<input type="file" id="' + uniqId + '" name="' + $this.attr('name') + '"/>');

      // 1ms timeout so it runs after all other events
      // that modify the value have triggered
      setTimeout(function () {
        // Add a new input
        if ($this.val()) {
          // Check for empty fields to prevent
          // creating new inputs when changing files
          if (!$inputs.length) {
            $wrap.after($file);
            $file.customFile();
          }
          // Remove and reorganize inputs
        } else {
          $inputs.parent().remove();
          // Move the input so it's always last on the list
          $wrap.appendTo($wrap.parent());
          $wrap.find('input').focus();
        }
      }, 1);

    });
  }

})(jQuery);

$('input[type=file]').customFile();
//# sourceURL=pen.js
    </script>
    
    
    
    
    <script>
// requires jQuery

// Code to preview images
function prevIMG(inputArg) {
  // Set Vars
  if (inputArg.files && inputArg.files[0]) {
    var readFile = new FileReader();
    var thisID = $(inputArg).attr('id');
      console.log("IDDDDDDDDDDDDDD");
console.log(thisID);
    // Render preview
    readFile.onload = function (e) {
      $('#' + thisID + '').after('<div class="filePrev"><img src="' + e.target.result + '" class="prevIMG"></div>');
    };
    readFile.readAsDataURL(inputArg.files[0]);
  }
}

$('.fileLoad').change(function () {
  prevIMG(this);
});
  

// end function change
//# sourceURL=pen.js
    </script>
    
    
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/postAd.js"></script>
</body>

</html>
