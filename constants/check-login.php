<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == "1") {
$myrole = $_SESSION['role'];
$myemail = $_SESSION['email'];
$myavatar = $_SESSION['avatar'];
$myusername = $_SESSION['username'];
$myregdate = $_SESSION['reg_date'];
$accver = $_SESSION['verified'];
$myid = $_SESSION['myid'];
$logged = "1";
}else{
$logged = "0";	
}
