<?php

require '../constants/config.php';
if (isset($_SESSION['reply'])) {
	$error_code = $_SESSION['reply'];

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
    $stmt = $conn->prepare("SELECT * FROM tbl_alerts WHERE code = :errorcode");
	$stmt->bindParam(':errorcode', $error_code);
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach($result as $row)
    {
		
     $description = $row['description'];
     $type = $row['type'];
     print '
     <div class="alert alert-'.$type.' closeable">
            '.$description.'
            <a class="close" href="#"></a>
        </div>
     ';
	}

					  
	}catch(PDOException $e)
    {

    }

    unset($_SESSION['reply']);


}

?>