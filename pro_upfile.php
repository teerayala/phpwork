<?php

    $foldeup = "uploads/";
    $fileup = $_FILES['upfile']['name'];
    if(move_uploaded_file($_FILES['upfile']['tmp_name'], $foldeup.$fileup)){
        echo "ส่งไฟล์เรียบร้อยแล้ว";
    }else{
        echo "ไม่สามารถส่งไฟล์ได้";
    }
    
?>