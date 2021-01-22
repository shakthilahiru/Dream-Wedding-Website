<?php
require '../../constants/config.php';
session_start();
$user_id = $_GET['node'];
$image_id = $_GET['img'];

$file = '../../uploads/avatar/'.$image_id.'';
if (!unlink($file))
  {

  }

	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("SELECT * FROM tbl_ads WHERE author = :author");
	$stmt->bindParam(':author', $user_id);
	$stmt->execute();
	$result = $stmt->fetchAll();

    foreach($result as $row)
    {
    	$ad_id = $row['ad_id'];
		$dirname = '../../uploads/ads/'.$ad_id.'';

		array_map('unlink', glob("$dirname/*.*"));
		rmdir($dirname);

	    $stmt = $conn->prepare("DELETE from tbl_ads WHERE ad_id = :adid");
	    $stmt->bindParam(':adid', $ad_id);
	    $stmt->execute();
		

	}

		    $stmt = $conn->prepare("DELETE from tbl_users WHERE user_id = :userid");
	    $stmt->bindParam(':userid', $user_id);
	    $stmt->execute();

	    $_SESSION['reply'] = "016";
	    header("location:../users");
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }