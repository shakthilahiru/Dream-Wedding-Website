<?php
require 'constants/config.php';
require 'constants/check-login.php';
?>
<!DOCTYPE html>
<html lang="en">


<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $site_title; ?> - Contact Us</title>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">

<link rel="stylesheet" type="text/css" href="assets/css/color-switcher.css">

<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="assets/css/main.css">

<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
<link rel="icon" href="assets/icon/favicon.ico">
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
		<a href="<?php echo $myrole ; ?>" class="header-top-button"><i class="lni-user"></i> My Account</a> |
       <a href="logout" class="header-top-button"><i class="lni-enter"></i> Log Out</a>
       <?php

	}else{

		?>
		
       		
       <a href="register" class="header-top-button"><i class="lni-user"></i>  ARE YOU A SUPPLIER?</a> |
       <a href="registeruser" class="header-top-button"><i class="lni-user"></i>  ARE YOU A USER?</a>
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
<a id="site_logo"  class="navbar-brand"><?php echo $site_title; ?></a>
</div>
<div class="collapse navbar-collapse" id="main-navbar">
<ul class="navbar-nav mr-auto w-100 justify-content-center">
<li class="nav-item">
<a class="nav-link" href="./">
Home
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="listings">
Listings
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="gallery">
Gallery
</a>
</li>
<li class="nav-item active">
<a class="nav-link" href="contact">
Contact
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="about">
About
</a>
</li>

</ul>
<div class="post-btn">
    <?php
	if ($logged == "1") {
		print '<a class="btn btn-common" href="'.$myrole.'/upload"><i class="lni-pencil-alt"></i> Post an Ad</a>';

		}else{

		print '<a class="btn btn-common" href="login"><i class="lni-lock"></i> Login to Post</a>';

		}

      ?>

</div>
</div>
</div>

<ul class="mobile-menu">
<li>
<a href="./">
Home
</a>
<li>
<a href="listings">
Listings
</a>
<li>
<li>
<a  href="gallery">
Gallery
</a>
<li>
<li>
<a class="active" href="contact">
Home
</a>
<li>
<li>
<a  href="about">
About
</a>
<li>
</ul>

</nav>

</header>


<div class="page-header" style="background: url(assets/img/banner1.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">Contact Us</h2>
<ol class="breadcrumb">
<li><a href="./">Home /</a></li>
<li style="color:white;" class="current">Contact Us</li>
</ol>
</div>
</div>
</div>
</div>
</div>





<section id="content" class="section-padding">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-xs-12">

<form class="contact-form"  action="app/send-message" autocomplete="off">
<h2 class="contact-title">
Send us a message
</h2>
<div class="row">
<div class="col-md-12">
	<?php require 'constants/check_reply.php'; ?>
<div class="row">
<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
<div class="form-group">
<input type="text" class="form-control" id="name" required name="name" placeholder="Name" required data-error="Please enter your name">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
<div class="form-group">
<input type="email" name="email" class="form-control" id="email" required placeholder="Email" required data-error="Please enter your email">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
<div class="form-group">
<input type="text" class="form-control" id="msg_subject" required name="phone" placeholder="Phone" required data-error="Please enter your phone">
<div class="help-block with-errors"></div>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<textarea class="form-control" placeholder="Massage" name="message" required rows="7" data-error="Write your message" required></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
</div>
 </div>
<div class="col-md-12">
<button type="submit"  class="btn btn-common">Submit Now</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</form>
</div>
<div class="col-lg-4 col-md-4 col-xs-12">

<div class="information">
<h3>Contact Info</h3>
<div class="contact-datails">
<ul class="list-unstyled info">
<li><span>Address : </span><p><?php echo $site_address; ?></p></li>
<li><span>Email : </span><p><?php echo $site_email; ?></p></li>
<li><span>Phone : </span><p><?php echo $site_phone; ?></p></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>


<footer>

<section class="footer-Content">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<div class="footer-logo"><h3 class="block-title">About</h3></div>
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
<h3 class="block-title">Quick Link</h3>
<ul class="menu">
<li><a href="./">- Home</a></li>
<li><a href="listings">- Listings</a></li>
<li><a href="gallery">- Gallery</a></li>
<li><a href="contact">- Contact</a></li>
<li><a href="About">- About</a></li>

    <?php
	if ($logged == "1") {
print '<li><a href="'.$myrole.'">- My Account</a></li>
       <li><a href="logout">- Log Out</a></li>';

	}else{
print '<li><a href="login">- Login</a></li>
       <li><a href="register">- Register</a></li>';

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


<script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.min.js"></script>
<script src="assets/js/summernote.js"></script>
</body>


</html>