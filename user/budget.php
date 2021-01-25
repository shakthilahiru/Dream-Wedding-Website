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
<title><?php echo $site_title; ?> - Budget</title>

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
<a href="./">
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
<a class="active" href="budget.php">
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
<?php require 'constants/check_reply.php'; ?>
<table class="table table-responsive dashboardtable tablemyads">

<tbody>


       
       
       
       
       
       
       
       
 <!DOCTYPE html>
<html lang="en-US">
<body>


    
    <main>

      <div class="field is-horizontal mt-10">
          <div class="margin-auto has-text-centered">
            <div class="select mt-10">
              <select id="amount-type">
                <option value="music">Music</option>
                <option value="car">Car</option>
              </select>   
            </div>
            <input class="input width-300 mt-10" id="description" type="text" placeholder="Add Description">
            <input class="input width-150 mt-10" id="amount" type="number" placeholder="Enter Amount"> 
            <button class="button is-black is-inverted is-outlined mt-10" id="add-btn">Add To Budget</button>
          </div>
      </div>

      <div class="columns">

          <div class="column is-5">

            <div class="box lg-navy width-300 has-text-white margin-auto my-30 padding-24">
              
              <div class="columns is-mobile">
                <div class="column has-text-left">Total Music</div>
                <div id="total-music" class="column"></div>
              </div>
      
              <div class="columns is-mobile">
                <div class="column has-text-left">Total Car</div>
                <div id="total-car" class="column is-4"></div>
                <div class="column is-2" id="total-percentage"></div>
              </div>

              <div class="columns is-mobile">
                <div class="column has-text-left">Balance</div>
                <div id="total-budget" class="column"></div>
              </div>

            </div>

            <div id="pie-chart" class="lg-silver-blue br-6 padding-8">
              <canvas id="myChart" width="300" height="300"></canvas>
            </div>

          </div>

        <div class="column is-7" id="lists-container">
          
          <div class="columns my-30 has-text-centered">
            <div class="column word-break lg-navy has-text-white margin-20 br-6">
              <h2 class="has-text-left-mobile has-text-weight-semibold">Music</h2>
              <div id="list-music" class="mb-10"></div>
            </div>
            <div class="column word-break lg-navy has-text-white margin-20 br-6">
              <h2 class="has-text-left-mobile has-text-weight-semibold">Car</h2>
              <div id="list-car" class="mb-10"></div>
            </div>
          </div>

          

        </div>

      </div>
    </main>
    <script src="js/app.js"></script>

</body>
</html>      
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       





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