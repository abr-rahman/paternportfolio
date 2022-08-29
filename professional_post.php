<?php
session_start();
require_once "database.php";
function validate($data){
  $data = trim($data);
  $data = stripcslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$cheak = true;

if(!$_POST['exam_name']){
  $_SESSION['exam_name_err'] = "Subject name is required";
  $cheak = false;
}
if(!$_POST['duration']){
  $_SESSION['duration_err'] = "Duration is required";
  $cheak = false;
}
if(!$_POST['institue']){
    $_SESSION['institue_err'] = "Institute name is required";
    $cheak = false;
  }
  if(!$_POST['explain_some']){
    $_SESSION['explain_some_err'] = "Explain is required";
    $cheak = false;
  }

print_r($_POST);
$name = $_POST['exam_name'];
$about_me = $_POST['duration'];
$institue = $_POST['institue'];
$explain_some = $_POST['explain_some'];

$ab = insert_que("pro_experiance","exam_name, duration, institue, explain_some", "'$name','$about_me','$institue','$explain_some'");

if($ab){
  $_SESSION['add_status'] = "Added Successfully";
  header('location: pro_experiance.php');
}else{
  echo "Something Else";
}




?>