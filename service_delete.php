<?php
    require_once "database.php";
    delete_query("Service","id", $_GET['id']);
    $_SESSION['delete_status'] = "Deleted Successfully";
    header('location: Service.php');
?>