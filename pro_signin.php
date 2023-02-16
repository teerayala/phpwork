<?php

    session_start();
    include "config.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM account WHERE username='$username' and password='$password'";
    $query = mysqli_query($conn,$sql);
    //$result = mysqli_fetch_array($query);
    $result = mysqli_fetch_assoc($query);
    
    


    if(!$result){   
        echo "ไม่สามารถ Sign in ได้";
        header("refresh: 3; url=signin.html");
    }else{
        $_SESSION['fullname'] = $result['fullname'];
        echo "Sign in ได้";
        header("refresh: 3; url=data.php");
    }



?>