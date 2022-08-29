<?php
    session_start();
    require_once "database.php";

    $cheak = true;

    if(!$_POST['skill_name']){
    $_SESSION['name_err'] = "Company name is required";
    $cheak = false;
    }
    print_r($_POST);
    $name = $_POST['skill_name'];
    $percentage = $_POST['percentage'];

    $ab = insert_que("skill","skill_name, percentage", "'$name','$percentage'");

    if($ab){
    $_SESSION['add_status'] = "Added Successfully";
    header('location: skill.php');
    }else{
    echo "Something Else";
    }



?>