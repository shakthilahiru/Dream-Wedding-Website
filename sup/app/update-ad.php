<?php
require '../../constants/config.php';
require '../../constants/check-login.php';

$ad_id = $_POST['ad_id'];
$ad_title = ucwords($_POST['title']);
$ad_category = $_POST['category'];
$ad_city = $_POST['city'];

$price = $_POST['price'];

if (isset($_POST['fixed'])) {
$fixed = "YES";
}else{
$fixed = "NO";	
}



$desc = $_POST['description'];
$short_desc = ucfirst($_POST['shortdesc']);

	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("UPDATE tbl_ads SET title = :title, category = :category, city = :city, price = :price, short_desc = :shortdesc, fixed = :fixed, description = :description WHERE ad_id = :adid AND author = :author");

    $stmt->bindParam(':title', $ad_title);
    $stmt->bindParam(':category', $ad_category);
    $stmt->bindParam(':city', $ad_city);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':shortdesc', $short_desc);
    $stmt->bindParam(':fixed', $fixed);
    $stmt->bindParam(':description', $desc);
    $stmt->bindParam(':adid', $ad_id);
    $stmt->bindParam(':author', $myid);

	$stmt->execute();

	$_SESSION['reply'] = "008";
	header("location:../edit-ad?node=$ad_id");
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>