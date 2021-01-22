<?php
session_start();
$id = $_POST['uploadlink'];
$upload_link = '../../uploads/ads/'.$id.'/';

$new_file_name = ''.$id.''.date('dmYhis').'.png';
$target_dir = "../../uploads/avatar/";
$target_file = '../../uploads/ads/'.$id.'/'.$new_file_name.'';

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {

	$_SESSION['reply'] = "003";
	header("location:../ad-images?node=$id");

    }else{

$data = getimagesize($_FILES["image"]["tmp_name"]);
$width = $data[0];
$height = $data[1];

if ($width == "750" && $height = "450") {

         if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {

             $_SESSION['reply'] = "007";
             header("location:../ad-images?node=$id");


         }else{
             echo "Sorry, there was an error uploading your file.";
         }



}else{

             $_SESSION['reply'] = "010";
             header("location:../ad-images?node=$id");


}


    }