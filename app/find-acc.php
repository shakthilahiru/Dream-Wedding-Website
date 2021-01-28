<?php
session_start();
require '../constants/config.php';
$myuser = $_POST['user'];
$expires = date("Y-m-d H:i:s", strtotime('+1 hours'));


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("SELECT email, username, role FROM tbl_admin WHERE username = :user OR email = :user UNION SELECT email, username, role FROM tbl_sup WHERE username =:user OR email = :user UNION SELECT email, username, role FROM tbl_user WHERE username = :user OR email = :user");
	$stmt->bindParam(':user', $myuser);
	$stmt->execute();
	$result = $stmt->fetchAll();
	
	$rec = count($result);

	if ($rec > 0) {

	}else{
		$_SESSION['reply'] = "013";
		header("location:../forgot-password");
	}

    foreach($result as $row)
    {
    	$role = $row['role'];
    	$musername = $row['username'];
    	$email = $row['email'];
    	$token = md5(getToken(6));
    	$reset_link = "$installation_path/reset?token=$token";
    	$msgtosent = 
    	"<style>
        .reset {
        	width:350px;
        	margin:auto;
        	text-align:center;
        	font-family:arial;
        	border-style: solid;
        	padding-left:10px;
        	padding-right:10px;
        	padding-bottom:10px;
        }

        .button {
   		 background-color: #4CAF50;
   		 border: none;
    	color: white;
    	padding: 6px 18px;
    	text-align: center;
    	text-decoration: none;
   	 	display: inline-block;
   		border-radius: 12px;
    	margin: 4px 2px;
    	cursor: pointer;
		}
    	</style>
    	<div class='reset'>
    	<h1>$site_title</h1>$musername, we received a request to reset your password.<br>
    	Use the link below to set up a new password for your account.<br>
    	If you did not request to reset your password, ignore this email and the link will
    	expire on its own.<br><a class='button' href='$reset_link'>SET NEW PASSWORD</a>
        </div>
    	";

    	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("DELETE from tbl_reset_tokens WHERE email = :email");
	$stmt->bindParam(':email', $email);
	$stmt->execute();
					  
	}catch(PDOException $e)
    {

    }

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	$stmt = $conn->prepare("INSERT INTO tbl_reset_tokens (email, token, role, expires) VALUES (:email, :token, :role, :expire)");
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':token', $token);
	$stmt->bindParam(':role', $role);
	$stmt->bindParam(':expire', $expires);
	$stmt->execute();
					  
	}catch(PDOException $e)
    {

    }

    require '../mail/PHPMailerAutoload.php';
    $mail = new PHPMailer;

    $mail->isSMTP();                                      
	$mail->Host = $smtp_host;
	$mail->SMTPAuth = true;                           
	$mail->Username = $smtp_user;               
	$mail->Password = $smtp_pass;                       
	$mail->SMTPSecure = 'tls';                   
	$mail->Port = 587;   

	$mail->setFrom($smtp_user, $site_title);
	$mail->addAddress($email);           
  
	$mail->isHTML(true);

	$mail->Subject = 'Reset Password';
	$mail->Body    = $msgtosent;
	$mail->AltBody = 'You need HTML Mail to view this email';

	if(!$mail->send()) {
	$_SESSION['reply'] = "015";
	header("location:../forgot-password");
	} else {
	$_SESSION['reply'] = "014";
	header("location:../forgot-password");
	}



	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


function getToken($length)
{
    $token = "";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
    $codeAlphabet.= "0123456789";
    $max = strlen($codeAlphabet); 

    for ($i=0; $i < $length; $i++) {
        $token .= $codeAlphabet[crypto_rand_secure(0, $max-1)];
    }

    return $token;
}

function crypto_rand_secure($min, $max)
{
    $range = $max - $min;
    if ($range < 1) return $min;
    $log = ceil(log($range, 2));
    $bytes = (int) ($log / 8) + 1;
    $bits = (int) $log + 1;
    $filter = (int) (1 << $bits) - 1;
    do {
        $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
        $rnd = $rnd & $filter; 
    } while ($rnd > $range);
    return $min + $rnd;
}
    ?>