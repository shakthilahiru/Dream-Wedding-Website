<?php
require 'constants/config.php';
require 'constants/check-login.php';

if (isset($_GET['page'])) {
$page = $_GET['page'];
if ($page=="" || $page=="1")
{
$page1 = 0;
$page = 1;
}else{
$page1 = ($page*18)-18;
}         
}else{
$page1 = 0;
$page = 1;  
}

if (isset($_GET['search']) && isset($_GET['city']) && isset($_GET['keyword']) && $_GET['search'] == "✓") {

$searched = "1";
$title = "Search Results";
$cat = $_GET['category'];
$city = $_GET['city'];
$keyword = '%'.$_GET['keyword'].'%';

if ($city == "all" && $cat == "all") {

$query_1 = "SELECT * FROM tbl_ads LEFT JOIN tbl_sup ON tbl_ads.author = tbl_sup.user_id WHERE status = 'active' AND title LIKE :keyword ORDER BY enc_id DESC LIMIT $page1,18";

$query_2 = "SELECT * FROM tbl_ads LEFT JOIN tbl_sup ON tbl_ads.author = tbl_sup.user_id WHERE status = 'active' AND title LIKE :keyword ORDER BY enc_id DESC";

}else if ($city == "all" && $cat != "all") {

$query_1 = "SELECT * FROM tbl_ads LEFT JOIN tbl_sup ON tbl_ads.author = tbl_sup.user_id WHERE status = 'active' AND category = '$cat' AND title LIKE :keyword ORDER BY enc_id DESC LIMIT $page1,18";

$query_2 = "SELECT * FROM tbl_ads LEFT JOIN tbl_sup ON tbl_ads.author = tbl_sup.user_id WHERE status = 'active' AND category = '$cat' AND title LIKE :keyword ORDER BY enc_id DESC";

}else if ($city != "all" && $cat != "all") {

$query_1 = "SELECT * FROM tbl_ads LEFT JOIN tbl_sup ON tbl_ads.author = tbl_sup.user_id WHERE status = 'active' AND city = '$city' AND title LIKE :keyword ORDER BY enc_id DESC LIMIT $page1,18";

$query_2 = "SELECT * FROM tbl_ads LEFT JOIN tbl_sup ON tbl_ads.author = tbl_sup.user_id WHERE status = 'active' AND city = '$city' AND title LIKE :keyword ORDER BY enc_id DESC";

}



}else{

$title = "Listings";
$query_1 = "SELECT * FROM tbl_ads LEFT JOIN tbl_sup on tbl_ads.author = tbl_sup.user_id WHERE tbl_ads.status = 'active' ORDER BY enc_id DESC LIMIT $page1,18";

$query_2 = "SELECT * FROM tbl_ads LEFT JOIN tbl_sup on tbl_ads.author = tbl_sup.user_id WHERE tbl_ads.status = 'active' ORDER BY enc_id DESC";

$searched = "0";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $site_title; ?> - <?php echo $title; ?></title>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">

<link rel="stylesheet" type="text/css" href="assets/css/color-switcher.css">

<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="assets/css/main.css">

<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Aladin&display=swap" rel="stylesheet">
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
<li class="nav-item active">
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
<a class="active" href="./">
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
<li>
<a class="about" href="about">
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
<h2 class="product-title"><?php echo $title; ?></h2>
<ol class="breadcrumb">
<li><a href="./">Home /</a></li>
<li style="color:white;" class="current"><?php echo $title; ?></li>
</ol>
</div>
</div>
</div>
</div>
</div>



<section class="featured section-padding">

<div class="container">
	<div class="row">
<div class="col-sm-12">
	<div class="product-filter">
<form action="listings" method="GET" autocomplete="off">
<div class="row">
<div class="col-sm-3">
<input type="text" 
<?php
if ($searched == "1") {
	print ' value="'.$_GET['keyword'].'" ';
}
?>
style="margin-top: 15px; margin-bottom: 15px;"  class="form-control" name="keyword" placeholder="What are you looking for ?">
</div>

<div class="col-sm-3">
<select style="height:44px; margin-top: 15px; margin-bottom: 15px;" class="form-control"  name="category" required>

<option value="all">All Categories</option>
<?php
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("SELECT * FROM tbl_categories ORDER BY category");
	$stmt->execute();
	$result = $stmt->fetchAll();

    foreach($result as $row)
    {
		print '<option';

		if ($searched == "1") {

			if ($cat == $row['category']) {
				print ' selected ';			}
		} 
		print '

		value="'.$row['category'].'">'.$row['category'].'</option>';
	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>

</select>
</div>

<div class="col-sm-4">

<select class="form-control"  style="height:44px; margin-top: 15px; margin-bottom: 15px;"  name="city" required>

<option value="all">All District</option>
<?php
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("SELECT * FROM tbl_cities ORDER BY city");
	$stmt->execute();
	$result = $stmt->fetchAll();

    foreach($result as $row)
    {
		print '<option';

		if ($searched == "1") {

			if ($city == $row['city']) {
				print ' selected ';			}
		} 
		print ' value="'.$row['city'].'">'.$row['city'].'</option>';
	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>
    
</select>

</div>
<input type="hidden" value="✓" name="search">
<div class="col-sm-2">
<input type="submit" style="height:44px; margin-top: 15px; margin-bottom: 15px;  width:100%"  class="btn btn-common" value="Search">
</div>
</form>

</div>
</div>
</div>
</div>

<div class="row">


<?php

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare($query_1);

	if ($title == "Search Results") {
    $stmt->bindParam(':keyword', $keyword);

	}
	$stmt->execute();
	$result = $stmt->fetchAll();

    foreach($result as $row)
    {
      $ad_id = $row['ad_id'];
      $directory = "uploads/ads/$ad_id/";
      $files = scandir ($directory);
      $firstFile = $directory . $files[2];
      $approved = $row['verified'];
      $featured = $row['featured'];

    	?>
    	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
<div class="featured-box">
<figure>

<div class="icon">
	<?php
	if ($approved == "YES") {
	print '<span class="bg-green"><i class="lni-check-mark-circle"></i></span>';

	}

	if ($featured == "yes") {
		print '<span ><i class="lni-star"></i></span>';
	}
	?>
</div>
<a href="ad/<?php echo $row['ad_id']; ?>"><img class="img-fluid" src="<?php echo $firstFile; ?>" alt=""></a>
</figure>
<div class="feature-content">
	
<div class="product">
<a ><?php echo $row['category']; ?></a>
</div>
<h4 class="list-limit"><a href="ad/<?php echo $row['ad_id']; ?>"><?php echo $row['title']; ?></a></h4>
<div class="meta-tag">
<span>
<a ><i class="lni-user"></i> <?php echo $row['username']; ?>

</a>
	<?php
	if ($approved == "YES") {
	print '<i class="lni-check-mark-circle"></i>';

	}
	?>
</span>
<span>
<a><i class="lni-map-marker"></i> <?php echo $row['city']; ?></a>
</span>

</div>
<p class="dsc limit-text-desc"><?php echo $row['short_desc']; ?></p>
<div class="listing-bottom">
<h3 style="font-size:18px;" class="price float-left"><?php echo number_format($row['price']); ?> <?php echo $currency; ?></h3>
<a href="ad/<?php echo $row['ad_id']; ?>" class="btn btn-common float-right">View</a>
</div>
</div>
</div>
</div>

<?php
		

	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


    ?>


</div>
</div>
<div class="pagination-bar">
<nav>
<ul class="pagination justify-content-center">

	  <?php
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
    $stmt = $conn->prepare($query_2);
  	if ($title == "Search Results") {
    $stmt->bindParam(':keyword', $keyword);

	}
    $stmt->execute();
    $result = $stmt->fetchAll();
    $rec = count($result);

    $total_pages = $rec /18;
    $total_pages = ceil($total_pages);

    if ($total_pages > 1) {

        for ($b=1;$b<=$total_pages;$b++) {

        	if ($searched == "1") {
       print '<li class="page-item"><a class="page-link '; if ($b == $page) { print ' active '; } print '" href="listings?keyword='.$_GET['keyword'].'&category='.$_GET['category'].'&city='.$_GET['city'].'&search="✓"&page='.$b.'">'.$b.'</a></li>';

        	}else{

        	print '<li class="page-item"><a class="page-link '; if ($b == $page) { print ' active '; } print '" href="listings?page='.$b.'">'.$b.'</a></li>';

        	}



        }
                                 

    }

            
  }catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>

</ul>
</nav>
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