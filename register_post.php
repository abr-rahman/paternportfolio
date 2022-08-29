<?php
  require_once "database.php";
    session_start();
  $ability = true;

 if (!$_POST['name']){
   echo "First Name is required.<br>";
  $_SESSION['name_err'] = "Name is required";
  $ability = false;
  }else{
     $_SESSION['old_name'] = $_POST['name'];
  }
 if (!$_POST['email']){
   echo "Email is required.<br>";
  $_SESSION['email_err'] = "Email is required";
  $ability = false;
 }else{
   $_SESSION['old_email'] = $_POST['email'];
 }
 if (!$_POST['password']){
   echo "Password Name is required.<br>";
  $_SESSION['password_err'] = "Password is required";
  $ability = false;
 }
 if (!$_POST['confirm_password']){
   echo "Confirm Password Name is required.<br>";
  $_SESSION['confirm_password_err'] = "Confirm Password is required";
  $ability = false;
 }else{
   if($_POST['password'] != $_POST['confirm_password']){
      $_SESSION['password_match_err'] = "Password dosen't match !";
    $ability = false;
   } 
 }
 if(!isset($_POST['gender'])){
    $_SESSION['gender_err'] = "Gender is required";
    $ability = false;
 }else{
   $_SESSION['old_gender'] = $_POST['gender'];
 }


 if($ability){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $gender = $_POST['gender'];

  $email_check_query = "SELECT COUNT(*) AS email_check FROM users WHERE email = '$email'";
  if(mysqli_fetch_assoc(mysqli_query(connect_to_db(), $email_check_query))['email_check'] == 1){
    echo "This email is already taken";
  }else{
    date_default_timezone_set('Asia/Dhaka');
    $current_date = date('Y-m-d h:i:s');
    
    $insert_query = "INSERT INTO users(name, email,password,gender,created_at) VALUES ('$name', '$email', '$password', '$gender','$current_date')";
    mysqli_query(connect_to_db(),$insert_query);
    $_SESSION['reg_email_address'] = $email;
    $_SESSION['reg_success'] = 'Your Registration completed.';
    $_SESSION['add_status'] = "Added Successfully";
    header('location: login.php');
  }
    
 }else{
    header('location: register.php');
 }
  


?> 