<?php
require '../constants/config.php';
require '../constants/check-login.php';
require 'constants/fetch-my-info.php';

if ($logged == "1") {
	   if ($myrole == "sup") {

	   }else{

	   	header("location:../");

	   }

	}else{

		header("location:../");

	}


?>

<!DOCTYPE html>
<html lang="en">


<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $site_title; ?> - My Account</title>

<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="../assets/css/slicknav.css">

<link rel="stylesheet" type="text/css" href="../assets/css/color-switcher.css">

<link rel="stylesheet" type="text/css" href="../assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="../assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="../assets/css/main.css">

<link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
<link rel="icon" href="../assets/icon/favicon.ico">
</head>
<body>



<div class="page-header-user" >
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">My Account</h2>
<ol class="breadcrumb">
</ol>
</div>
</div>
</div>
</div>
</div>


<div id="content" class="section-padding">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
<aside>
<div class="sidebar-box">
<div class="user">
<figure>
<a >
	<?php 
	if ($myavatar == null) {

		print '<img class="user_avatar" src="../assets/img/blank_avatar.png" alt="">';

	}else{
		print '<img class="user_avatar" src="../uploads/avatar/'.$myavatar.'" alt="">';

	}

	?>
	
</a>
</figure>
<div class="usercontent">
<h3>@<?php echo $myusername; ?>
	<?php if ($accver == "YES") { print '<span class="lni-check-mark-circle"></span>'; } ?>
</h3>
<h4>ID: <?php echo $myid; ?></h4>
</div>
</div>
<nav class="navdashboard">
<ul>
<li>
<a class="active" href="./">
<i class="lni-user"></i>
<span>My Account</span>
</a>
</li>

<li>
<a href="myads">
<i class="lni-layers"></i>
<span>My Ads</span>
</a>
</li>
<li>
<a href="my-active-ads">
<i class="lni-cloud-check"></i>
<span>My Active Ads</span>
</a>
</li>
<li>
<a href="my-pending-ads">
<i class="lni-cloud-upload"></i>
<span>My Pending Ads</span>
</a>
</li>
<li>
<a href="my-featured-ads">
<i class="lni-star"></i>
<span>My Featured Ads</span>
</a>
</li>
<li>
<a href="upload">
<i class="lni-upload"></i>
<span>Upload Ads</span>
</a>
</li>      
<li>
<a href="../logout">
<i class="lni-enter"></i>
<span>Logout</span>
</a>
</li>
</ul>
</nav>
</div>

</aside>
</div>
<div class="col-sm-12 col-md-8 col-lg-9">
<div class="page-content">
<div class="inner-box">
<div class="dashboard-box">
<h2 class="dashbord-title">Dashboard</h2>
</div>
<div class="dashboard-wrapper">
<div class="dashboard-sections">
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="dashboardbox">
<div class="icon"><i class="lni-layers"></i></div>
<div class="contentbox">
<h2><a>Total Ad Posted</a></h2>
<h3><?php echo number_format($total_ads); ?> Add Posted</h3>
</div>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="dashboardbox">
<div class="icon"><i class="lni-cloud-check"></i></div>
<div class="contentbox">
<h2><a>Active Ads</a></h2>
<h3><?php echo number_format($active_ads); ?> Active Ads</h3>
</div>
</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="dashboardbox">
<div class="icon"><i class="lni-cloud-upload"></i></div>
<div class="contentbox">
<h2><a>Pending Ads</a></h2>
<h3><?php echo number_format($pending_ads); ?> Pending Ads</h3>
</div>
</div>
</div>
</div>
</div>


<div class="dashboard-box">
<h2 class="dashbord-title">Profile Settings</h2>
</div>

<div class="dashboard-wrapper">
	<?php require 'constants/check_reply.php'; ?>
<form action="app/up-acc.php" method="POST" autocomplete="off">

<div class="form-group mb-3">
<label class="control-label">Username</label>
<input id="UserName"  class="form-control input-md" name="user_name" value="<?php echo $myusername; ?>"  placeholder="Enter your username" required type="text">
<div class="tg-checkbox mt-3">
</div>
</div>

<div class="form-group mb-3">
<label class="control-label">Email</label>
<input type="email" id="UserEmail" class="form-control input-md" name="user_email" value="<?php echo $myemail; ?>" placeholder="Enter your email" required type="email">
<div class="tg-checkbox mt-3">
</div>
</div>

<button class="btn btn-common" type="submit">Update</button>
</form>
</div>




<div class="dashboard-box">
<h2 class="dashbord-title">Password Update</h2>
</div>

<div class="dashboard-wrapper">

<div class="form-group mb-3">
	<form action="app/new-password.php" method="POST" autocomplete="off" name="frm1" >
<label class="control-label">New Password</label>
<input class="form-control input-md" name="password"  placeholder="Enter your new password" required type="password">
<div class="tg-checkbox mt-3">
</div>
</div>

<div class="form-group mb-3">
<label class="control-label">Confirm New Password</label>
<input class="form-control input-md" name="confirmpassword" placeholder="Confirm your new password" required type="password">
<div class="tg-checkbox mt-3">
</div>
</div>

<button class="btn btn-common" onclick="return val_a();"  type="submit">Update</button>
</form>
</div>




<div class="dashboard-box">
<h2 class="dashbord-title">Avatar Update</h2>
</div>

<div class="dashboard-wrapper">

<form action="app/new-dp" method="POST"  enctype="multipart/form-data">
<div class="form-group mb-3">

<input class="form-control input-md" name="image" accept="image/*"  required type="file">
<div class="tg-checkbox mt-3">
</div>
</div>


<button class="btn btn-common" type="submit">Update</button>
<?php
if ($myavatar == null) {

}else{

	print '<a'; ?> onclick = "return confirm('Are you sure you want to delete ?');"  <?php print ' class="btn btn-common" href="app/drop-dp.php?lnk='.base64_encode($myavatar).'">Delete Image</a>';

}

?>
</div>
</form>



</div>
</div>
</div>
</div>
</div>
</div>
</div>





<a href="#" class="back-to-top">
<i class="lni-chevron-up"></i>
</a>

<div id="preloader">
<div class="loader" id="loader-1"></div>
</div>


<script src="../assets/js/jquery-min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/jquery.counterup.min.js"></script>
<script src="../assets/js/waypoints.min.js"></script>
<script src="../assets/js/wow.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/jquery.slicknav.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/form-validator.min.js"></script>
<script src="../assets/js/contact-form-script.min.js"></script>
<script src="../assets/js/summernote.js"></script>
<script src="../assets/js/password-validate.js"></script>

</body>

</html>