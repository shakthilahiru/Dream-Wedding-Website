<?php
session_start();
require '../../constants/config.php';

$ad_id = $_GET['node'];
$dirname = '../../uploads/ads/'.$ad_id.'';
$url = $_GET['url'];

array_map('unlink', glob("$dirname/*.*"));
rmdir($dirname);

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("DELETE from tbl_ads WHERE ad_id = :adid");
	$stmt->bindParam(':adid', $ad_id);

	$_SESSION['reply'] = '016';
	header("location:../$url");
	$stmt->execute();
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>