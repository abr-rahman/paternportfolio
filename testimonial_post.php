<?php
session_start();
require_once "database.php";
// image uploaded path
$upload_photo = $_FILES['picture'];
$after_expload = explode(".", $upload_photo['name']);
$new_photo_name = rand() . time().".". end($after_expload);
$up_location = $upload_photo['tmp_name'];
$new_lacation = 'assets/img/testimonials/'. $new_photo_name;
move_uploaded_file($up_location, $new_lacation);

$cheak = true;

if(!$_POST['name']){
  $_SESSION['name_err'] = "Name is required";
  $cheak = false;
}
if(!$_POST['position']){
  $_SESSION['position_err'] = "Position type is required";
  $cheak = false;
}
if(!$_POST['message']){
    $_SESSION['message_err'] = "Message is required";
    $cheak = false;
}

print_r($_POST);
$name = $_POST['name'];
$position = $_POST['position'];
$message = $_POST['message'];

$ab = insert_que("testimonial","name, position, message, picture", "'$name','$position','$message','$new_photo_name'");

if($ab){
  $_SESSION['add_status'] = "Added Successfully";
  header('location: testimonial.php');
}else{
  echo "Something Else";
}

?>