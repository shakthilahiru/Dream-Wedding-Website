<?php
if (isset($_GET['token'])) {

	$token = $_GET['token'];

	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("SELECT * FROM tbl_reset_tokens WHERE token = :token");
	$stmt->bindParam(':token', $token);
	$stmt->execute();
	$result = $stmt->fetchAll();
	$rec = count($result);


    foreach($result as $row)
    {
    	$expires = $row['expires'];
    	$role = $row['role'];
    	$email = $row['email'];
    	$nowtime = date("Y-m-d H:i:s");
    	$hourdiff = round((strtotime($expires) - strtotime($nowtime))/3600, 1);
    	if ($hourdiff < 0) {

    		$token_expired = "1";

    	}else{

    		$token_expired = "0";

    	}
		

	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


}else{
	header('location:./');
}