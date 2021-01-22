<?php
require '../constants/config.php';
require '../constants/check-login.php';
require 'constants/ad-img-fetch.php';

if (isset($_GET['node'])) {

}else{
 header('location:../');
}

if ($ad_rec == "1") {

}else{
   header('location:../');
}

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
<title><?php echo $site_title; ?> - Manage Ad Images</title>

<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="../assets/css/slicknav.css">

<link rel="stylesheet" type="text/css" href="../assets/css/color-switcher.css">

<link rel="stylesheet" type="text/css" href="../assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="../assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="../assets/css/main.css">

<link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
<link rel="stylesheet" type="text/css" href="../assets/css/summernote.css">
<link rel="icon" href="../assets/icon/favicon.ico">
</head>
<body>


<div class="page-header-user" >
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">Manage Ad Images</h2>
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
<a  href="./">
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
<div class="col-sm-12 col-md-12 col-lg-9">
<div class="row page-content">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="inner-box">
<div class="dashboard-box">
<h2 class="dashbord-title"><?php echo $ad_title; ?></h2>
</div>
<div class="dashboard-wrapper">
<p>Browse image files to upload for the Ad <b><?php echo $ad_title; ?></b><br>All images must have a dimension of <strong>(750 X 450)</strong></p>
  <?php require 'constants/check_reply.php'; ?>
<form action="app/send-image.php" method="POST"  enctype="multipart/form-data">
<input   accept="image/*"   type='file' onchange="readURL(this);" required name="image" /><br><br>
<input type="hidden" name="uploadlink" value="<?php echo $add_id; ?>">
<img id="blah"class="image-preview" src="../assets/img/blank.png" alt="Image Preview" /><br><br>
<button class="btn btn-common" type="submit">Upload</button>
<script>
  function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
      </script>
    </form>
<hr>
<h5 class="dashbord-title">Uploaded Images</h5>
<strong>N:B Click on image to delete</strong><br><br>

<center>
<?php
$dir = '../uploads/ads/'.$add_id.'/*.png';

$fileList = glob($dir);

foreach($fileList as $filename){
    print '<a'; ?> onclick = "return confirm('Are you sure you want to delete ?')" <?php print ' href="app/drop-image.php?id='.$add_id.'&lnk='.$filename.'"><img id="blah"class="image-list" src="'.$filename.'" alt="Image Preview" /></a>';

}


?>
</center>
<hr>

</div>
</div>
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

<script>
      $('#summernote').summernote({
          height: 250, // set editor height
          minHeight: null, // set minimum height of editor
          maxHeight: null, // set maximum height of editor
          focus: false // set focus to editable area after initializing summernote
      });
    </script>
</body>

</html>