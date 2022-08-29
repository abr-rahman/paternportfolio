<?php
    require_once "database.php";
    delete_query("skill","id", $_GET['id']);
    $_SESSION['delete_status'] = "Deleted Successfully";
    header('location: skill.php');
?>