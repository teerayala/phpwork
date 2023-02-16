<?php

    include "config.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT username, password FROM account WHERE username='$username' and password='$password'";
    $query = mysqli_query($conn,$sql);
    //$result = mysqli_fetch_array($query);
    $result = mysqli_fetch_assoc($query);


    if(!$result){
        echo "ไม่สามารถ Sign in ได้";
    }else{
        echo "Sign in ได้";
    }



?>