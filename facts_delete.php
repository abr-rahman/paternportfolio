<?php
    require_once "database.php";
    delete_query("facts","id", $_GET['id']);
    $_SESSION['delete_status'] = "Deleted Successfully";
    header('location: facts.php');
?>