<?php
require '../../constants/config.php';
require '../../constants/check-login.php';
$email = $_POST['email'];

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
		header("location:../account");

	}else{

		$stmt = $conn->prepare("UPDATE tbl_admin SET email = :email WHERE user_id = :myid");
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':myid', $myid);

		$stmt->execute();
			 $_SESSION['email'] = $email;

		$_SESSION['reply'] = "005";
		header("location:../account");


	}

					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
			
?>	