<?php
    require_once "database.php";
    delete_query("header_part","id", $_GET['id']);
    $_SESSION['delete_status'] = "Deleted Successfully";
    header('location: header_part.php');
?>