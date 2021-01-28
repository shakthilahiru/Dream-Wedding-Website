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


       
       
       
       
       
       
<head>       
 
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create two unequal columns that floats next to each other */
.column {
  float: left;
  padding: 30px;
  height: 50px; /* Should be removed. Only for demonstration */
}

.left {
  width: 35%;
}

.right {
  width: 4S5%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>


<div class="row">
  <div class="column left">

	<title>Budget</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
<div class="container">
	<h4>Category</h4>
<hr>
<form method="post" action="checkbox-db.php">
<table class="table table-bordered">
	
		
	
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       

	<tbody>
		<br>
			<input type="checkbox" name="prodid[]" value="Reception">
			Reception
				<input type="hidden" name="prodname[]" value="Reception">
			
			
		<br>
			<input type="checkbox" name="prodid[]" value="Catering">
			Catering
				<input type="hidden" name="prodname[]" value="Catering">
			
		<br>	
		
		
			<input type="checkbox" name="prodid[]" value="Photography &amp; Vedio">
			Photography &amp; Vedio
				<input type="hidden" name="prodname[]" value="Photography &amp; Vedio">
			
		<br>
			<input type="checkbox" name="prodid[]" value="Music">
			Music
				<input type="hidden" name="prodname[]" value="Music">
			
			
		<br>
			<input type="checkbox" name="prodid[]" value="Cultural Ceremonies">
			Cultural Ceremonies
				<input type="hidden" name="prodname[]" value="Cultural Ceremonies">
			
		<br>	
		
		
			<input type="checkbox" name="prodid[]" value="Wedding Car">
			Wedding Car
				<input type="hidden" name="prodname[]" value="Wedding Car">	
       <br>    
           
       	<input type="checkbox" name="prodid[]" value="Wedding Invitation">
			Wedding Invitation
				<input type="hidden" name="prodname[]" value="Wedding Invitation">
			
			
		<br>
			<input type="checkbox" name="prodid[]" value="Flowers &amp; Decoration">
			Flowers &amp; Decoration
				<input type="hidden" name="prodname[]" value="Flowers &amp; Decoration">
			
		<br>	
		
		
			<input type="checkbox" name="prodid[]" value="Entertainment">
			Entertainment
				<input type="hidden" name="prodname[]" value="Entertainment">
           
       <br>    
           
       	<input type="checkbox" name="prodid[]" value="Wedding Cakes">
			Wedding Cakes
				<input type="hidden" name="prodname[]" value="Wedding Cakes">
			
			
		<br>
			<input type="checkbox" name="prodid[]" value="Bridal Accessories">
			Bridal Accessories
				<input type="hidden" name="prodname[]" value="Bridal Accessories">
			
		<br>	
		
		
			<input type="checkbox" name="prodid[]" value="Groom's Accessories">
			Groom's Accessories
				<input type="hidden" name="prodname[]" value="Groom's Accessories">	 
           
       <br>    
           
       	<input type="checkbox" name="prodid[]" value="Health &amp; Beauty">
			Health &amp; Beauty
				<input type="hidden" name="prodname[]" value="Health &amp; Beauty">
			
			
		<br>
			<input type="checkbox" name="prodid[]" value="Jewellery">
			Jewellery
				<input type="hidden" name="prodname[]" value="Jewellery">
			
			     
		
	</tbody>
</table>
<div class="text-left">
	<input type="submit" name="submit" class="btn btn-success" value="Submit">
	</div>
</div>
</form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>






  </div>
  <div class="column right">
   <br>
         <br>
         <br>
         
         
         
         
    <!doctype html public "-//w3c//dtd html 3.2//en">

<?Php
require "config.php";// Database connection

if($stmt = $connection->query("SELECT product_name FROM product")){

  echo "No of records : ".$stmt->num_rows."<br>";
$php_data_array = Array(); // create PHP array
  echo "<table>
<tr> <th>	product_name</th></tr>";
while ($row = $stmt->fetch_row()) {
   echo "<tr><td>$row[0]</td></tr>";
   $php_data_array[] = $row; // Adding to array
   }
echo "</table>";
}else{
echo $connection->error;
}
//print_r( $php_data_array);
// You can display the json_encode output here. 
 

// Transfor PHP array to JavaScript two dimensional array 
echo "<script>
        var my_2d = ".json_encode($php_data_array)."
</script>";
?>


<div id="chart_div"></div>
<br><br>
<a href=https://www.plus2net.com/php_tutorial/chart-database.php></a>
</body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
 google.charts.load('current', {'packages':['corechart']});
     // Draw the pie chart when Charts is loaded.
      google.charts.setOnLoadCallback(draw_my_chart);
      // Callback that draws the pie chart
      function draw_my_chart() {
        // Create the data table .
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Category');
        
		for(i = 0; i < my_2d.length; i++)
    data.addRow([my_2d[i][0], parseInt(my_2d[i][1])]);
// above row adds the JavaScript two dimensional array data into required chart format
    var options = {title:'',
                       width:600,
                       height:500};

        // Instantiate and draw the chart
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
</script>

       
       
       
       





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