<?php
include 'redirect.php'; 
include '../connect/connect.php';
include '../classes/User.php';
$user = $_SESSION['username'];
$adminobj = new User($conn,$user);
$advertisedata =$adminobj->getAdvertiseDataForAdmin($conn);
$advertisenum =$adminobj->getAdvertiseNumForAdmin($conn);
$hostdata =$adminobj->getHostDataForAdmin($conn);
$hostnum =$adminobj->getHostNumForAdmin($conn);
$pendingaddsdata =$adminobj->getAdminPendingAdsdata($conn);
$pendingaddsNum =$adminobj->getAdminPendingAdsNum($conn);
$alladsnum = $adminobj->getAdminAllAdsnum($conn);
$hostpagesdata=$adminobj->getHostPagesData($conn);
$verifyPagesNum=$adminobj->getHostPagesDataNum($conn);
$blockednum = $adminobj->getBlockedUsersNum($conn);
$currentAdsnum = $adminobj->getAdminCurrentAdsNum($conn);
$historyAdsnum = $adminobj->getAdminHistoryAdsNum($conn);

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
				<a href="index.html" class="logo">
					Dashboard
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>


