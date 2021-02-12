<?php
$ad_id = $_GET['key'];
$shr = ''.$installation_path.'/ad/'.$ad_id.'';



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("SELECT * FROM tbl_ads LEFT JOIN tbl_sup ON tbl_ads.author = tbl_sup.user_id WHERE tbl_ads.ad_id = :adid");
$stmt->bindParam(':adid', $ad_id);
$stmt->execute();
$result = $stmt->fetchAll();
$rec = count($result);

if ($rec == "1") {
    $not_found = "NO";
}else{
    $not_found = "YES";
    $title = "Not Found";

}

    foreach($result as $row)
    {
    	$title = $row['title'];
    	$category = $row['category'];
    	$city = $row['city'];
    	//$adcond = $row['ad_condition'];
    	$price = $row['price'];
    	$fixed = $row['fixed'];
    	//$brand = $row['brand'];
    	$des = $row['description'];
    	$post_date = $row['date_posted'];
        $short_des = $row['short_desc'];

    	$author = $row['username'];
    	$avatar = $row['avatar'];
    	$verified = $row['verified'];
    	$email = $row['email'];

    	$authid = $row['author'];
        $adstatus = $row['status'];
		

	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    $fbshare = "//www.facebook.com/sharer/sharer.php?u=$shr";
$gpshare = "https://plus.google.com/share?url=$shr";
$twshare = "https://twitter.com/intent/tweet?url=$shr&text=$title";

?>