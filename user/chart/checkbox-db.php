<?php
include 'database.php';
if(isset($_POST['submit']))
{
$checked_array=$_POST['prodid'];
foreach ($_POST['prodname'] as $key => $value) 
{
	if(in_array($_POST['prodname'][$key], $checked_array))
	{
	$prodname=$_POST['prodname'][$key];
	


	$insertqry="INSERT INTO `product`( `product_name`) VALUES ('$prodname')";
	$insertqry=mysqli_query($con,$insertqry);
	}
	
	
}
}
header('Location: index.php');
?>