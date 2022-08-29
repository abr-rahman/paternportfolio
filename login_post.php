<?php
    require_once "database.php";
    session_start();

    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $count_query = "SELECT COUNT(*) AS login_capability FROM users WHERE email = '$email' AND password = '$password'";
    $output_db = mysqli_query(connect_to_db(),$count_query);
    $outpot_after_db = (mysqli_fetch_assoc($output_db)) ;  
    
    if($outpot_after_db['login_capability'] == 1){
        $_SESSION['login_status'] = true;
        $_SESSION['login_email'] = $email;

        $name_query = "SELECT name FROM users WHERE email = '$email'";
        $_SESSION['login_name'] =  mysqli_fetch_assoc(mysqli_query(connect_to_db(),$name_query))['name'];
        $_SESSION['add_status'] = "Added Successfully";
        header('location: dashboard.php');
    }else{
        $_SESSION['login_err'] = "Your password is not correct";
        header("location: login.php");
       
    }
?> 
