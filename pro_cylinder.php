<?php

    $r = $_POST['r'];
    $h = $_POST['h'];

    
    $v = pi() * $r * $r * $h;

    echo "ด้าน r เท่ากับ ".$r."<br>";
    echo "ด้าน h เท่ากับ ".$h."<br>";
    echo "พื้นที่สี่เหลี่ยมคางหมู เท่ากับ ".$v." หน่วย";
    header("refresh: 5; url=cylinder.html");

?>