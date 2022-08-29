<?php
session_start();
require_once "database.php";

$cheak = true;

if(!$_POST['clients_number']){
  $_SESSION['clients_number_err'] = "Clients number is required";
  $cheak = false;
}
if(!$_POST['project_type']){
  $_SESSION['project_type_err'] = "Project type is required";
  $cheak = false;
}
if(!$_POST['project_details']){
    $_SESSION['project_details_err'] = "Project details is required";
    $cheak = false;
  }
  if(!$_POST['icon']){
    $_SESSION['icon_err'] = "Icon is required";
    $cheak = false;
  }
  

print_r($_POST);
$icon = $_POST['icon'];
$project_type = $_POST['project_type'];
$project_details = $_POST['project_details'];

$ab = insert_que("service","icon, project_type, project_details", "'$icon','$project_type','$project_details'");

if($ab){
  $_SESSION['add_status'] = "Added Successfully";
  header('location: service.php');
}else{
  echo "Something Else";
}

?>