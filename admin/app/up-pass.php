<?php
require '../../constants/config.php';
require '../../constants/check-login.php';

$new_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
 	$stmt = $conn->prepare("UPDATE tbl_admin SET login = :login WHERE user_id = :myid");
	$stmt->bindParam(':login', $new_password);
	$stmt->bindParam(':myid', $myid);

	$_SESSION['reply'] = "006";
	header("location:../account");

	$stmt->execute();
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>