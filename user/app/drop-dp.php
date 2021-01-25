<?php
require '../../constants/config.php';
require '../../constants/check-login.php';

$image_id = base64_decode($_GET['lnk']);

$file = '../../uploads/avatar/'.$image_id.'';
if (!unlink($file))
  {
  echo ("Error deleting $file");
  }
else
  {

        try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
        $stmt = $conn->prepare("UPDATE tbl_sup SET avatar = '' WHERE user_id = :myid");
        $stmt->bindParam(':myid', $myid);

        $stmt->execute();

        $_SESSION['avatar'] = "";
        $_SESSION['reply'] = "005";
        header("location:../");
					  
	    }catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }

  }