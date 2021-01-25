<?php
$ad_id = $_GET['node'];


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
 	$stmt = $conn->prepare("SELECT * FROM tbl_ads WHERE ad_id = :adid AND author = :author");
 	$stmt->bindParam(':adid', $ad_id);
	$stmt->bindParam(':author', $myid);
	$stmt->execute();

	$result = $stmt->fetchAll();
	$key = count($result);

    foreach($result as $row)
    {
    	$title = $row['title'];
    	$category = $row['category'];
    	$city = $row['city'];
    	$price = $row['price'];
    	$fixed = $row['fixed'];
    	$des = $row['description'];
        $short_desc = $row['short_desc'];
    	

	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>