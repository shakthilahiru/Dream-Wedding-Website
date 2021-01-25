<?php
require '../../constants/config.php';
session_start();
$about = $_POST['about'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("UPDATE tbl_about SET about =:about");
	$stmt->bindParam(':about', $about);

	$stmt->execute();

	$_SESSION['reply'] = '016';
	header("location:../about");
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>
