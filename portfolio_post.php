<?php
session_start();
require_once "database.php";
// image uploaded path
$upload_photo = $_FILES['main_img'];
$after_expload = explode(".", $upload_photo['name']);
$new_photo_name = rand() . time().".". end($after_expload);
$up_location = $upload_photo['tmp_name'];
$new_lacation = 'assets/img/portfolio/'. $new_photo_name;
move_uploaded_file($up_location, $new_lacation);

$cheak = true;

if(!$_POST['name']){
  $_SESSION['name_err'] = "Company name is required";
  $cheak = false;
}

print_r($_POST);
$name = $_POST['name'];
$ab = insert_que("portfolio","main_img, name", "'$new_photo_name','$name'");

if($ab){
  $_SESSION['add_status'] = "Added Successfully";
  header('location: portfolio.php');
}else{
  echo "Something Else";
}

?>