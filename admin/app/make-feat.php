<?php
session_start();
require '../../constants/config.php';
$ad_id = $_GET['node'];
$url = $_GET['url'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("UPDATE tbl_ads SET featured = 'yes' WHERE ad_id = :adid");
	$stmt->bindParam(':adid', $ad_id);

	$stmt->execute();

	$_SESSION['reply'] = '016';
	header("location:../$url");
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>
