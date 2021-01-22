<?php
require 'constants/config.php';
require 'constants/check-login.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $site_title; ?> - Gallery</title>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">

<link rel="stylesheet" type="text/css" href="assets/css/color-switcher.css">

<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="assets/css/main.css">

<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
<link rel="stylesheet" href="assets/css/lightbox.min.css">
<script type="text/javascript" src="assets/js/lightbox-plus-jquery.min.js"></script>
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
<li class="nav-item active">
<a class="nav-link" href="gallery">
Gallery
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="contact">
Contact
</a>
</li>
<li class="nav-item ">
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
<a  href="./">
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
<a href="contact">
Home
</a>
<li>
<li class="active" >
<a href="about">
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
<h2 class="product-title">Gallery</h2>
<ol class="breadcrumb">
<li><a href="./">Home /</a></li>
<li style="color:white;" class="current">Gallery</li>
</ol>
</div>
</div>
</div>
</div>
</div>

       
       
       
<div class="container">


<div class="col-6 col-sm-6 col-md-12">
<div class="row">
       <div class="image-slider">

           	<a href="assets/img/gallery-img-01.jpg" data-lightbox="myGallery" data-title="">
          	<img  src="assets/img/gallery-img-01.jpg" alt="" width="" height="" ></a>

           	<a href="assets/img/gallery-img-02.jpg" data-lightbox="myGallery" data-title="">
          	<img  src="assets/img/gallery-img-02.jpg" alt="" width="" ></a>
			
			 <a href="assets/img/gallery-img-03.jpg" data-lightbox="myGallery" data-title="">
          	<img  src="assets/img/gallery-img-03.jpg" alt="" width="" ></a>
			
			 <a href="assets/img/gallery-img-04.jpg" data-lightbox="myGallery" data-title="">
          	<img  src="assets/img/gallery-img-04.jpg" alt="" width="" ></a>

          	<a href="assets/img/gallery-img-05.jpg" data-lightbox="myGallery" data-title="">
          	<img  src="assets/img/gallery-img-05.jpg" alt="" width="" ></a>

          	<a href="assets/img/gallery-img-06.jpg" data-lightbox="myGallery" data-title="">
          	<img  src="assets/img/gallery-img-06.jpg" alt="" width="" ></a>

          	<a href="assets/img/gallery-img-07.jpg" data-lightbox="myGallery" data-title="">
          	<img  src="assets/img/gallery-img-07.jpg" alt="" width="" ></a>

          	<a href="assets/img/gallery-img-08.jpg" data-lightbox="myGallery" data-title="">
          	<img  src="assets/img/gallery-img-08.jpg" alt="" width="" ></a>

          	<a href="assets/img/gallery-img-09.jpg" data-lightbox="myGallery" data-title="">
          	<img  src="assets/img/gallery-img-09.jpg" alt="" width="" ></a>

          	<a href="assets/img/gallery-img-10.jpg" data-lightbox="myGallery" data-title="">
          	<img  src="assets/img/gallery-img-10.jpg" alt="" width="" ></a>

          	<a href="assets/img/gallery-img-11.jpg" data-lightbox="myGallery" data-title="">
          	<img  src="assets/img/gallery-img-11.jpg" alt="" width="" ></a>

          	<a href="assets/img/gallery-img-12.jpg" data-lightbox="myGallery" data-title="">
          	<img  src="assets/img/gallery-img-12.jpg" alt="" width="" ></a>

			 <a href="assets/img/gallery-img-13.jpg" data-lightbox="myGallery" data-title="">
          	<img  src="assets/img/gallery-img-13.jpg" alt="" width="" ></a>

          	<a href="assets/img/gallery-img-14.jpg" data-lightbox="myGallery" data-title="">
          	<img  src="assets/img/gallery-img-14.jpg" alt="" width="" ></a>

          	<a href="assets/img/gallery-img-15.jpg" data-lightbox="myGallery" data-title="">
          	<img  src="assets/img/gallery-img-15.jpg" alt="" width="" ></a>

          	<a href="assets/img/gallery-img-16.jpg" data-lightbox="myGallery" data-title="">
          	<img  src="assets/img/gallery-img-16.jpg" alt="" width="" ></a>

          	<a href="assets/img/gallery-img-17.jpg" data-lightbox="myGallery" data-title="">
          	<img  src="assets/img/gallery-img-17.jpg" alt="" width="" ></a>

          	<a href="assets/img/gallery-img-18.jpg" data-lightbox="myGallery" data-title="">
          	<img  src="assets/img/gallery-img-18.jpg" alt="" width="" ></a>

          	<a href="assets/img/gallery-img-19.jpg" data-lightbox="myGallery" data-title="">
          	<img  src="assets/img/gallery-img-19.jpg" alt="" width="" ></a>

          	<a href="assets/img/gallery-img-20.jpg" data-lightbox="myGallery" data-title="">
          	<img  src="assets/img/gallery-img-20.jpg" alt="" width="" ></a>
            
            <a href="assets/img/gallery-img-21.jpg" data-lightbox="myGallery" data-title="">
          	<img  src="assets/img/gallery-img-21.jpg" alt="" width="" ></a>
            
            <a href="assets/img/gallery-img-22.jpg" data-lightbox="myGallery" data-title="">
          	<img  src="assets/img/gallery-img-22.jpg" alt="" width="" ></a>
            
            <a href="assets/img/gallery-img-23.jpg" data-lightbox="myGallery" data-title="">
          	<img  src="assets/img/gallery-img-23.jpg" alt="" width="" ></a>
            
            <a href="assets/img/gallery-img-24.jpg" data-lightbox="myGallery" data-title="">
          	<img  src="assets/img/gallery-img-24.jpg" alt="" width="" ></a>
              </div>

    </div>
</div>       
       
	<!-- End Gallery -->
       



</div>











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