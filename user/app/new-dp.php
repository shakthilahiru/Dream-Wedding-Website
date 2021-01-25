<?php
require '../../constants/config.php';
require '../../constants/check-login.php';

$new_file_name = ''.$myid.''.date('dmYhis').'.png';
$target_dir = "../../uploads/avatar/";
$target_file = '../../uploads/avatar/'.$new_file_name.'';
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if ($_FILES["image"]["size"] > 800000) {

	$_SESSION['reply'] = "004";
	header("location:../");

}else{

	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {

	$_SESSION['reply'] = "003";
	header("location:../");

    }else{

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        

        try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
        $stmt = $conn->prepare("UPDATE tbl_sup SET avatar = :newavatar WHERE user_id = :myid");
        $stmt->bindParam(':newavatar', $new_file_name);
        $stmt->bindParam(':myid', $myid);

        $stmt->execute();

        $_SESSION['avatar'] = "$new_file_name";
        $_SESSION['reply'] = "005";
        header("location:../");
					  
	    }catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }


    } else {
        echo "Sorry, there was an error uploading your file.";
    }



    }

}

