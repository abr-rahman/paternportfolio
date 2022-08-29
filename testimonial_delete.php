<?php
    require_once "database.php";
    delete_query("testimonial","id", $_GET['id']);
    $_SESSION['delete_status'] = "Deleted Successfully";
    header('location: testimonial.php');
?>