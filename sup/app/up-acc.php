<?php
require '../../constants/config.php';
require '../../constants/check-login.php';

$email = $_POST['user_email'];
$myusername = $_POST['user_name'];

	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("SELECT email FROM tbl_sup WHERE email = :email AND user_id != :myid UNION SELECT email FROM tbl_admin WHERE email = :email AND user_id != :myid");
		$stmt->bindParam(':email', $email);
	$stmt->bindParam(':myid', $myid);
	$stmt->execute();
	$result = $stmt->fetchAll();

	$rec = count($result);
	
	if ($rec > 0) {

		$_SESSION['reply'] = "018";
        header("location:../");

	}else{


			try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("SELECT username FROM tbl_sup WHERE username = :username AND user_id != :myid UNION SELECT username FROM tbl_admin WHERE username = :username AND user_id != :myid");
		$stmt->bindParam(':username', $myusername);
	$stmt->bindParam(':myid', $myid);
	$stmt->execute();
	$result = $stmt->fetchAll();

	$rec = count($result);
	
	if ($rec > 0) {

		$_SESSION['reply'] = "020";
        header("location:../");

	}else{

	$stmt = $conn->prepare("UPDATE tbl_sup SET email = :email, username = :username WHERE user_id = :myid");
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':username', $myusername);
	$stmt->bindParam(':myid', $myid);

	$stmt->execute();

	 $_SESSION['email'] = $email;
     $_SESSION['username'] = $myusername;

	        $_SESSION['reply'] = "005";
        header("location:../");


		
	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }



	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }