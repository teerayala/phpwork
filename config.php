<?php

    $server = "localhost";   //Hostname: localhost or IP Address
    $user = "root";
    $pass = "";
    $db = "data";

    $conn = mysqli_connect($server,$user,$pass,$db);

    if(!$conn){
        echo "ติดต่อไม่สำเร็จ";
    }

?>