<?php
session_start();
require '../../constants/config.php';
$user_id = $_GET['node'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("UPDATE tbl_sup SET verified = 'YES' WHERE user_id = :userid");
	$stmt->bindParam(':userid', $user_id);

	$stmt->execute();

	$_SESSION['reply'] = '016';
	header("location:../users");
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>
