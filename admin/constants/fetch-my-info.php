<?php
$total_ads = 0;
$pending_ads = 0;
$active_ads = 0;
$featured_ads = 0;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("SELECT * FROM tbl_ads");
    $stmt->bindParam(':author', $myid);
	$stmt->execute();
	$result = $stmt->fetchAll();
	$total_ads = count($result);

    foreach($result as $row)
    {
    	if ($row['status'] == "inactive") {

   				$pending_ads++;
    	} 

    	if ($row['status'] == "active") {

    			$active_ads++;
    		
    	} 

        if ($row['featured'] == "yes") {
            $featured_ads++;
        }
		

	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>