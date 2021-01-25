<?php
$add_id = $_GET['node'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
 	$stmt = $conn->prepare("SELECT * FROM tbl_ads WHERE ad_id = :adid AND author = :author");
 	$stmt->bindParam(':adid', $add_id);
 	$stmt->bindParam(':author', $myid);
	$stmt->execute();
	$result = $stmt->fetchAll();
	$ad_rec = count($result);

    foreach($result as $row)
    {
    	$ad_title = $row['title'];

	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
