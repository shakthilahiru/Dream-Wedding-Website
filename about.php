<?php
require 'constants/config.php';
require 'constants/check-login.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $site_title; ?> - About Us</title>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">

<link rel="stylesheet" type="text/css" href="assets/css/color-switcher.css">

<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">

<link rel="preconnect" href="https://fonts.gstatic.com">

<link href="https://fonts.googleapis.com/css2?family=Aladin&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">

<link rel="preconnect" href="https://fonts.gstatic.com">

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
<li class="nav-item">
<a class="nav-link" href="contact">
Contact
</a>
</li>
<li class="nav-item active">
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
<h2 class="product-title">About Us</h2>
<ol class="breadcrumb">
<li><a href="./">Home /</a></li>
<li style="color:white;" class="current">About Us</li>
</ol>
</div>
</div>
</div>
</div>
</div>

       
       
       
<section id="about" class="section-padding">
<div class="container">
<div class="row">
<div class="col-md-12 col-lg-12 col-xs-12">
<div class="about-wrapper">
       
       
         <!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<img src="assets/img/about-img.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 text-center">
					<div class="inner-column">
						<h1>Welcome To <span>Dream Wedding</span></h1>
						<h4>Little Story</h4>
						<p>Before two hearts unite in celebration, a lot goes into preparations. Before the love is declared in public, there are many defining moments of choosing and picking. We at Dream Wedding Planner will create the dream wedding you have always wished for, without a single detail missing. </p>
						<br><p>It’s not easy turning your dream wedding into a reality. With today’s hectic lifestyle, many couples and their families do not have time for the detailed planning and work a beautiful wedding of their dream.</p>
						
					</div>
				</div>
				<div class="col-md-12">
					<div class="inner-pt">
						<br><p>We at Dream Wedding Planner, as the pioneers in Sri Lanka wedding planning work together with you at any stage of the planning process to ensure that your wedding is planned to a perfect, totally enjoyable, stress free and memorable one. After all, it is your wedding. We are there to help you – and to make your day perfect.</p><br>
						<p>Our counseling alone would provide you the crème de la crème of the industry specialists within your stipulated options and budget. We will give you the freedom and peace of mind to simply enjoy your magnificent day in complete bliss.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About --> 
       

<p class="intro-desc">
	<?php
	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("SELECT * FROM tbl_about LIMIT 1");
	$stmt->execute();
	$result = $stmt->fetchAll();

    foreach($result as $row)
    {
	
	echo $row['about'];


	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>


</p>

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