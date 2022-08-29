<?php
session_start();
require_once "database.php";
// image uploaded path
$upload_photo = $_FILES['main_img'];
$after_expload = explode(".", $upload_photo['name']);
$new_photo_name = rand() . time().".". end($after_expload);
$up_location = $upload_photo['tmp_name'];
$new_lacation = 'assets/img/'. $new_photo_name;
move_uploaded_file($up_location, $new_lacation);

$cheak = true;

if(!$_POST['name']){
  $_SESSION['name_err'] = "Company name is required";
  $cheak = false;
}
if(!$_POST['about_me']){
  $_SESSION['about_err'] = "Dasiagnation is required";
  $cheak = false;
}

print_r($_POST);
$name = $_POST['name'];
$about_me = $_POST['about_me'];

$ab = insert_que("header_part","main_img, name, about_me", "'$new_photo_name','$name','$about_me'");

if($ab){
  $_SESSION['add_status'] = "Added Successfully";
  header('location: header_part.php');
}else{
  echo "Something Else";
}

?>