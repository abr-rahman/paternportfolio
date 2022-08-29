<?php
    require_once "database.php";
    delete_query("pro_experiance","id", $_GET['id']);
    $_SESSION['delete_status'] = "Deleted Successfully";
    header('location: pro_experiance.php');
?>