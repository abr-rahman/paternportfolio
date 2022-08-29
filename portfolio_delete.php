<?php
    require_once "database.php";
    delete_query("portfolio","id", $_GET['id']);
    $_SESSION['delete_status'] = "Deleted Successfully";
    header('location: portfolio.php');
?>