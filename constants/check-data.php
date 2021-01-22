<?php
require 'config.php';

if(isset($_POST['user_name'])) {

	 $name = $_POST['user_name'];

	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("SELECT username FROM tbl_sup WHERE username = :username UNION SELECT username FROM tbl_admin WHERE username = :username UNION SELECT username FROM tbl_user WHERE username = :username");
    $stmt->bindParam(':username', $name);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $rec = count($result);

    if ($rec > 0) {
   print '<div class="alert alert-warning">Username is already registered</div>';

    }else{


    }

					  
	}catch(PDOException $e)
    {

    }

}


if(isset($_POST['user_email'])) {

	 $email = $_POST['user_email'];

	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("SELECT email FROM tbl_sup WHERE email = :email UNION SELECT email FROM tbl_admin WHERE email = :email UNION SELECT username FROM tbl_user WHERE username = :username");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $rec = count($result);

    if ($rec > 0) {
     print '<div class="alert alert-warning">Email is already registered</div>';

    }else{


    }

					  
	}catch(PDOException $e)
    {

    }

}


