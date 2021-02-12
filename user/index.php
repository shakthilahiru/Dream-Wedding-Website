<?php
require '../constants/config.php';
require '../constants/check-login.php';
require 'constants/fetch-my-info.php';

if ($logged == "1") {
	   if ($myrole == "user") {

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

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="icon" href="../assets/icon/favicon.ico">
</head>
<body>

<header id="header-wrap">

<div class="top-bar">
<div class="container">
<div class="row">
<div class="col-lg-7 col-md-5 col-xs-12">

<ul class="list-inline">
<li><a style="padding-top:5px;" class="header-top-button"><i class="lni-envelope"></i><?php echo $site_email; ?></a></li>
</ul>

</div>
<div class="col-lg-5 col-md-7 col-xs-12">

<div class="header-top-right float-right">
	<?php
	if ($logged == "1") {
		?>
		<a href="./" class="header-top-button"><i class="lni-user"></i> My Account</a> |
       <a href="../logout" class="header-top-button"><i class="lni-enter"></i> Log Out</a>
       <?php

	}else{

		?>
		<a href="../login" class="header-top-button"><i class="lni-lock"></i> Log In</a> |
       <a href="../register" class="header-top-button"><i class="lni-pencil"></i> Register</a>
   <?php

	}

	?>

</div>
</div>
</div>
</div>
</div>


<nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar">
<div class="container">

<div class="navbar-header">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
<span class="lni-menu"></span>
<span class="lni-menu"></span>
<span class="lni-menu"></span>
</button>


</div>
</div>



</nav>

</header>



<div class="userpage-header" >
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="userbreadcrumb-wrapper">
<h2 class="userproduct-title">My Account</h2>
<ol class="userbreadcrumb">
<li><a href="../">Home /</a></li>
<li class="current" style="color:white">My Account</li>
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
<a href="checklist.php">
<i class="lni-list"></i>
<span>Checklist</span>
</a>
</li>       

<li>
<a href="budget.php">
<i class="lni-pie-chart"></i>
<span>Budget</span>
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



<footer>

<section class="footer-Content">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="block-title">About</h3>
<div class="textwidget">
<p><?php echo $about_site; ?></p>
</div>
<ul class="mt-3 footer-social">
<li><a class="facebook" href="<?php echo $facebook_link; ?>"><i class="lni-facebook-filled"></i></a></li>
<li><a class="twitter" href="<?php echo $twitter_link; ?>"><i class="lni-twitter-filled"></i></a></li>
<li><a class="instaram" href="<?php echo $instagram_link; ?>"><i class="lni-instagram-filled"></i></a></li>
<li><a class="google-plus" href="<?php echo $googleplus_link; ?>"><i class="lni-google-plus"></i></a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="block-title">Quick Links</h3>
<ul class="menu">
<li><a href="../">- Home</a></li>
<li><a href="../listings">- Listings</a></li>
<li><a href="../gallery">- Gallery</a></li>
<li><a href="../contact">- Contact</a></li>
<li><a href="../About">- About</a></li>

    <?php
	if ($logged == "1") {
print '<li><a href="./">- My Account</a></li>
       <li><a href="../logout">- Log Out</a></li>';

	}else{
print '<li><a href="../login">- Login</a></li>
       <li><a href="../register">- Register</a></li>';

	}

	?>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="block-title">Contact Info</h3>
<ul class="contact-footer">
<li>
<strong><i class="lni-phone"></i></strong><span><?php echo $site_phone; ?></span>
</li>
<li>
<strong><i class="lni-envelope"></i></strong><span><?php echo $site_email; ?></span>
</li>
<li>
<strong><i class="lni-map-marker"></i></strong><span><?php echo $site_address; ?></span>
</li>
</ul>
</div>
</div>
</div>
</div>
</section>


<div id="copyright">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="site-info text-center">
<p class="company-name">All Rights Reserved &copy; 2020 <a href="#">Dream Wedding</a>
</div>
</div>
</div>
</div>
</div>

</footer>


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