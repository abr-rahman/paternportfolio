<?php
    require_once "database.php";
    delete_query("education","id", $_GET['id']);
    $_SESSION['delete_status'] = "Deleted Successfully";
    header('location: education.php');
?>