<?php
require '../constants/config.php';
require '../constants/check-login.php';

if ($logged == "1") {
	   if ($myrole == "user") {

	   }else{

	   	header("location:../");

	   }

	}else{

		header("location:../");

	}

if (isset($_GET['page'])) {
$page = $_GET['page'];
if ($page=="" || $page=="1")
{
$page1 = 0;
$page = 1;
}else{
$page1 = ($page*10)-10;
}         
}else{
$page1 = 0;
$page = 1;  
}


?>

<!DOCTYPE html>
<html lang="en">


<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $site_title; ?> - Budget</title>
       


<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="../assets/css/slicknav.css">

<link rel="stylesheet" type="text/css" href="../assets/css/color-switcher.css">

<link rel="stylesheet" type="text/css" href="../assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="../assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="../assets/css/main.css">

<link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
       
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
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
<a id="site_logo"  class="navbar-brand"><?php echo $site_title; ?></a>
</div>
<div class="collapse navbar-collapse" id="main-navbar">
<ul class="navbar-nav mr-auto w-100 justify-content-center">
<li class="nav-item">
<a class="nav-link" href="../">
Home
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../listings">
Listings
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../gallery">
Gallery
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../contact">
Contact
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../about">
About
</a>
</li>

</ul>
<div class="post-btn">
    <?php
	if ($logged == "1") {
		print '<a class="btn btn-common" href="upload"><i class="lni-pencil-alt"></i> Post an Ad</a>';

		}else{

		print '<a class="btn btn-common" href="login"><i class="lni-lock"></i> Login to Post</a>';

		}

      ?>

</div>
</div>
</div>

<ul class="mobile-menu">
<li>
<a class="" href="../">
Home
</a>
<li>
<a href="../listings">
Listings
</a>
<li>
<li>
<a  href="../gallery">
Gallery
</a>
<li>
<li>
<a href="../contact">
Home
</a>
<li>
<li>
<a class="about" href="../about">
About
</a>
<li>
</ul>

</nav>

</header>

<div class="page-header" >
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">Budget</h2>
<ol class="breadcrumb">
<li><a href="../">Home /</a></li>
<li class="current" style="color:white">Budget</li>
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
<a  href="./">
<i class="lni-user"></i>
<span>My Account</span>
</a>
</li>
       
<li>
<a class="active" href="budget">
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
<h2 class="dashbord-title">Budget</h2>
</div>
<div class="dashboard-wrapper">

<!---Container-->
    <div class="ml-64">
    <iframe 
        src='' height="10" width="15" id='Budget' 
        	frameborder='0' style='border:0;' 
            width='500' height='300'>
    </iframe>
    <p>
        <input type="button" id="bt" onclick="print()" value="Download PDF" />
    </p>
       </div>          
       
<div class="Container mx-auto">
    

	<!---Input Section-->

	<div class="mt-10">
		<label for="enter_money" class="text-2xl block text-center">Enter Amount that you want to Manage</label>
		<input id="enter_money" type="text" class="shadow appearence-none border border-gray-500 rounded px-5 py-2 block mx-auto mt-5">
		
		<p id="error" class=" hidden text-red-500 text-sm italic text-center mt-3"> Please enter a valid amount</p>
	</div>

	<!---Manage Budget Section-->
	<div id="manage_div" class="mt-s ">
		
		

		<p id="error_manage" class="  text-red-500 text-sm italic text-center mt-10"> </p>

        <div>
	       <button id="evaluate" class="bg-pink-500 hover:bg-pink-400 text-white font-bold py-2 px-4 border-b-4 border-pink-500 hover:border-pink-400 rounded mt-10 block mx-auto">Evaluate My Money</button>
	       	
	      
        </div>

        <!---Loading gif image-->
        <img id="loader" src="../assets/img/giphy.gif" class="hidden block mx-auto">

        <!---show result Section-->
        <div id="result_section" class="mt-10 hidden">
        	<p class="text-2xl text-center font-semibold">Here's how you should manage your money</p>
        	
        	<div class="h-80 grid grid-flow-col grid-rows-3  sm:grid-rows-3 md:grid-rows-4 lg:grid-rows-8 xl:grid-rows-6 ">
        		
        		<div class="flex-grow-0 bg-blue-600 shadow-lg px-6 py-4 rounded mx-2 my-2">
        			<h1 class="font-bold text-white text-xl">Reception</h1>
        			<p id="show_reception" class="text-white font-semibold text-2xl"></p>
        		</div>


        		<div class="flex-grow-0 bg-pink-600 shadow-lg px-6 py-4 rounded mx-2 my-2">
        			<h1 class="font-bold text-white text-xl">Catering</h1>
        			<p id="show_catering" class="text-white font-semibold text-2xl"></p>
        		</div>


        		<div class="flex-grow-0 bg-green-600 shadow-lg px-6 py-4 rounded mx-2 my-2">
        			<h1 class="font-bold text-white text-xl">Photography &amp; Vedio</h1>
        			<p id="show_photography" class="text-white font-semibold text-2xl"></p>
        		</div>

        		<div class="flex-grow-0 bg-purple-600 shadow-lg px-6 py-4 rounded mx-2 my-2">
        			<h1 class="font-bold text-white text-xl">Music</h1>
        			<p id="show_music" class="text-white font-semibold text-2xl"></p>
        		</div>
                   
                   <div class="flex-grow-0 bg-blue-600 shadow-lg px-6 py-4 rounded mx-2 my-2">
        			<h1 class="font-bold text-white text-xl">Cultural Ceremonies</h1>
        			<p id="show_cultural" class="text-white font-semibold text-2xl"></p>
        		</div>
                   
                   
                   <div class="flex-grow-0 bg-pink-600 shadow-lg px-6 py-4 rounded mx-2 my-2">
        			<h1 class="font-bold text-white text-xl">Wedding Car</h1>
        			<p id="show_car" class="text-white font-semibold text-2xl"></p>
        		</div>
                   
                   <div class="flex-grow-0 bg-green-600 shadow-lg px-6 py-4 rounded mx-2 my-2">
        			<h1 class="font-bold text-white text-xl">Wedding Invitation</h1>
        			<p id="show_invitation" class="text-white font-semibold text-2xl"></p>
        		</div>
                   
                   <div class="flex-grow-0 bg-purple-600 shadow-lg px-6 py-4 rounded mx-2 my-2">
        			<h1 class="font-bold text-white text-xl">Flowers &amp; Decoration</h1>
        			<p id="show_flowers" class="text-white font-semibold text-2xl"></p>
        		</div>
                   
                   <div class="flex-grow-0 bg-blue-600 shadow-lg px-6 py-4 rounded mx-2 my-2">
        			<h1 class="font-bold text-white text-xl">Entertainment</h1>
        			<p id="show_entertainment" class="text-white font-semibold text-2xl"></p>
        		</div>
                   
                   <div class="flex-grow-0 bg-pink-600 shadow-lg px-6 py-4 rounded mx-2 my-2">
        			<h1 class="font-bold text-white text-xl">Wedding Cakes</h1>
        			<p id="show_cakes" class="text-white font-semibold text-2xl"></p>
        		</div>
                   
                   <div class="flex-grow-0 bg-green-600 shadow-lg px-6 py-4 rounded mx-2 my-2">
        			<h1 class="font-bold text-white text-xl">Bridal Accessories</h1>
        			<p id="show_bridal" class="text-white font-semibold text-2xl"></p>
        		</div>
                   
                 <div class="flex-grow-0 bg-purple-600 shadow-lg px-6 py-4 rounded mx-2 my-2">
        			<h1 class="font-bold text-white text-xl">Groom's Accessories</h1>
        			<p id="show_grooms" class="text-white font-semibold text-2xl"></p>
        		</div>
                   
                <div class="flex-grow-0 bg-blue-600 shadow-lg px-6 py-4 rounded mx-2 my-2">
        			<h1 class="font-bold text-white text-xl">Health &amp; Beauty</h1>
        			<p id="show_health" class="text-white font-semibold text-2xl"></p>
        		</div>
                   
                <div class="flex-grow-0 bg-pink-600 shadow-lg px-6 py-4 rounded mx-2 my-2">
        			<h1 class="font-bold text-white text-xl">Jewellery</h1>
        			<p id="show_jewellery" class="text-white font-semibold text-2xl"></p>
        		</div>   
                   
                 

        	</div>

        	<button id="reset_button" class="bg-red-500 hover:bd-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded mt-5 block mx-auto">  Reset</button>

        </div>

	</div>
	
</div>




</div>




</div>
</div>
<div class="pagination-bar">
<nav>
<ul class="pagination justify-content-center">
  <?php
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
    $stmt = $conn->prepare("SELECT * FROM tbl_ads WHERE author = :author ORDER BY enc_id DESC");
    $stmt->bindParam(':author', $myid);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $rec = count($result);

    $total_pages = $rec /10;
    $total_pages = ceil($total_pages);

    if ($total_pages > 1) {

        for ($b=1;$b<=$total_pages;$b++) {

          print '<li class="page-item"><a class="page-link '; if ($b == $page) { print ' active '; } print '" href="myads?page='.$b.'">'.$b.'</a></li>';

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
       
<script>
	let print = () => {
    	let objFra = document.getElementById('Budget');
        objFra.contentWindow.focus();
        objFra.contentWindow.print();
    }
    
    // Using regular js features.
    
    function print() {
        var objFra = document.getElementById('Budget');
         objFra.contentWindow.focus();
       objFra.contentWindow.print();
     }
</script>
<script type="text/javascript" src="../assets/js/app.js"></script>
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