<?php
session_start();
require '../constants/config.php';
$usermail = $_SESSION['setmail'];
$userole = $_SESSION['role'];
$new_pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

if ($userole == "sup") {

	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("UPDATE tbl_sup SET login = :login WHERE email = :email");
	$stmt->bindParam(':login', $new_pass);
	$stmt->bindParam(':email', $usermail);

	$stmt->execute();

	$stmt = $conn->prepare("DELETE from tbl_reset_tokens WHERE email = :email");
	$stmt->bindParam(':email', $usermail);
	$stmt->execute();

		$_SESSION['setmail'] = "";
	$_SESSION['role'] = "";

	$_SESSION['reply'] = "006";
	header("location:../login");
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

}



if ($userole == "admin") {

	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("UPDATE tbl_admin SET login = :login WHERE email = :email");
	$stmt->bindParam(':login', $new_pass);
	$stmt->bindParam(':email', $usermail);

	$stmt->execute();

	$stmt = $conn->prepare("DELETE from tbl_reset_tokens WHERE email = :email");
	$stmt->bindParam(':email', $usermail);
	$stmt->execute();

	$_SESSION['setmail'] = "";
	$_SESSION['role'] = "";

	$_SESSION['reply'] = "006";
	header("location:../login");
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

}

if ($userole == "user") {

	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("UPDATE tbl_user SET login = :login WHERE email = :email");
	$stmt->bindParam(':login', $new_pass);
	$stmt->bindParam(':email', $usermail);

	$stmt->execute();

	$stmt = $conn->prepare("DELETE from tbl_reset_tokens WHERE email = :email");
	$stmt->bindParam(':email', $usermail);
	$stmt->execute();

		$_SESSION['setmail'] = "";
	$_SESSION['role'] = "";

	$_SESSION['reply'] = "006";
	header("location:../login");
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

}