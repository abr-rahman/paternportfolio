<?php
    session_start();
    require_once "database.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $ab = insert_que("contact","name, email, subject, message,", "'$name','$email','$subject','$message'");
    header('location: index.php');
?>