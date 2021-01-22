<?php
$file = $_GET['lnk'];
$post = $_GET['id'];

$file = '../'.$file.'';
if (!unlink($file))
  {
  header("location:../ad-images.php?node=$post");
  }
else
  {
  header("location:../ad-images.php?node=$post");
  }
  ?>