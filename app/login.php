<?php
session_start();
require '../constants/config.php';
$myemail = $_POST['user_email'];
$mypass = $_POST['password'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
  	$stmt = $conn->prepare("SELECT user_id, username, email, role, login, avatar, reg_date, verified from tbl_admin WHERE email = :email UNION SELECT user_id, username, email, role, login, avatar, reg_date, verified from tbl_sup WHERE email = :email UNION SELECT user_id, username, email, role, login, avatar, reg_date, verified from tbl_user WHERE email = :email");
  	$stmt->bindParam(':email', $myemail);
	$stmt->execute();
	$result = $stmt->fetchAll();
	$rec = count($result);

	if ($rec > 0) {

	   foreach($result as $row)
        {
        	$role = $row['role'];
        	if (password_verify($mypass, $row['login'])) {

        			$_SESSION['logged'] = "1";
        			$_SESSION['role'] = $row['role'];
        			$_SESSION['email'] = $myemail;
        			$_SESSION['avatar'] = $row['avatar'];
        			$_SESSION['username'] = $row['username'];
        			$_SESSION['reg_date'] = $row['reg_date'];
        			$_SESSION['verified'] = $row['verified'];
        			$_SESSION['myid'] = $row['user_id'];
        			$role = $row['role'];
        			header("location:../$role");

             

        } else {

            $_SESSION['reply'] = "002";
            header("location:../login");
    
        }


	     }


	}else{

	   $_SESSION['reply'] = "002";
       header("location:../login");

	}
			  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }