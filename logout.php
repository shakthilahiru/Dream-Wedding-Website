<?php
session_start();
$_SESSION['logged'] = "0";
session_destroy();
header("location:./");

?>